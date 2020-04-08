let cv = document.getElementById("cv")
let file = document.getElementById("filename")
let lang = document.getElementById("langue")
let hiddenLang = document.getElementById("hiddenLangue")


function OnFileUpload() {
    file.style.visibility = "visible"
    file.innerText = cv.files[0].name.substr(0,14)+"..."
}

function OnLangSelect() {
    let arr = []
    for(let i=0; i<lang.selectedOptions.length; i++){
        arr.push(lang.selectedOptions[i].value)
    }
    hiddenLang.value = arr.join(",")
}