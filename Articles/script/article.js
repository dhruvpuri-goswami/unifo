let selarticleSaveBtn = document.getElementById("articleSaveBtn");

selarticleSaveBtn.addEventListener("click", () => {
    // first validate all field
    let articleName = document.getElementById("articleName").value;
    let aboutArticle = document.getElementById("aboutArticle").value;
    let briefArticle = document.getElementById("briefArticle").value;
    let fileDocInpt = document.getElementById("articleFileDoc");
    let videoLink = document.getElementById("videoLink").value;

    let errMsg = document.querySelector(".validation-articlepage");

    validateAllField(articleName, aboutArticle, briefArticle, fileDocInpt, videoLink).then((result) => {
        if (result) {
            console.log("reached on success!", result);
            let dataObj = {
                isRequested: true,
                articleKeyword: "IT",
                articleName: articleName.trim(),
                articleBrief: briefArticle.trim(),
                articleMore: aboutArticle.trim()
            }

            console.log(fileDocInpt.files)


            // request to php file to add information about articles
            fetch("./backend/insrt.php", {
                method: "POST",
                body: JSON.stringify(dataObj),
                header: {
                    'Content-Type': 'application/json'
                }
            }).then((response) => {
                return response.text();
            }).then((actual_data) => {
                console.log(actual_data);
                if (actual_data.includes("inserted")) {
                    console.log(fileDocInpt.files.length, actual_data.substring(0,2));
                    document.getElementById("articleID").setAttribute("idarticle", actual_data.substring(0, 2));
                    if (fileDocInpt.files.length > 0) {
                        let form = new FormData();
                        form.append("articleID", document.getElementById("articleID").getAttribute("idarticle"));
                        form.append("elemFile", fileDocInpt.files[0])

                        fetch("./backend/fileinsrt.php", {
                            method: "POST",
                            body: form,
                            header: {
                                'Content-Type': 'multipart/form-data'
                            }
                        }).then((response) => {
                            return response.text();
                        }).then((actual_dataFile) => {
                            if (actual_dataFile.includes("inserted")) {
                                if(videoLink.length > 5){
                                    let formVdo = new FormData();
                                    formVdo.append("isRequested", true);
                                    formVdo.append("articleID", document.getElementById("articleID").getAttribute("idarticle"));
                                    formVdo.append("videoLink", videoLink)
                                    fetch("./backend/videoInsrt.php", {
                                        method: "POST",
                                        body: formVdo,
                                        header: {
                                            'Content-Type': 'multipart/form-data'
                                        }
                                    }).then((response) => {
                                        return response.text();
                                    }).then((actual_videData)=>{
                                        if(actual_videData.includes("inserted")){
                                            errMsg.style.color = "green";
                                            errMsg.innerHTML = `<i class="fa-regular fa-circle-check"></i> Successfully, Saved You written article`;
                                            errMsg.classList.add("show-validation-articlepage");
                                            setTimeout(() => {
                                                window.location.href = "../Dashboard";
                                            }, 4000);
                                        }
                                    }).catch((error)=>{
                                        console.log(error);
                                    })
                                }else{
                                    errMsg.style.color = "green";
                                    errMsg.innerHTML = `<i class="fa-regular fa-circle-check"></i> Successfully, Saved You written article`;
                                    errMsg.classList.add("show-validation-articlepage");
                                    setTimeout(() => {
                                        window.location.href = "../Dashboard";
                                    }, 4000);
                                }
                            }
                        }).catch((error) => {
                            console.log(error);
                        })
                    } else {
                        errMsg.style.color = "green";
                        errMsg.innerHTML = `<i class="fa-regular fa-circle-check"></i> Successfully, Saved You written article`;
                        errMsg.classList.add("show-validation-articlepage");
                        setTimeout(() => {
                            window.location.href = "../Dashboard";
                        }, 3000);
                    }
                } else {
                    errMsg.style.color = "green";
                    errMsg.innerHTML = `${actual_data}`;
                    errMsg.classList.add("show-validation-articlepage");
                    setTimeout(() => {
                        errMsg.classList.remove("show-validation-articlepage");
                    }, 3000);
                }
            }).catch((error) => {
                console.log(error);
            })
        }
    }).catch((error) => {
        console.log(error);
    })
})

function validateAllField(articleName, aboutArticle, briefArticle, fileDocInpt, videoLink) {
    return new Promise((resolve, reject) => {
        if (articleName.length <= 0 || aboutArticle.length <= 0 || briefArticle.length <= 0) {
            let errMsg = document.querySelector(".validation-articlepage");
            errMsg.style.co3lor = "var(--close)";
            errMsg.innerHTML = `<i class="fa-solid fa-triangle-exclamation"></i> Please, fill all required field.`;
            errMsg.classList.add("show-validation-articlepage");
            setTimeout(() => {
                errMsg.classList.remove("show-validation-articlepage");
            }, 3000);
            console.log("reached", articleName, aboutArticle, briefArticle);
            reject(true);
        } else {
            resolve(true);
        }
    })
}