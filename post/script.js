function getText(e, phpLink) {
    const getId = e.target.querySelector('li') ? e.target.querySelector('li').id : e.target.parentNode.querySelector('li').id
    window.location.href = `${phpLink}?data=` + getId
}

function edit(e) {
    const $contents = document.querySelectorAll('.postPage .postPage-Info')
    const completeBtn = document.querySelector('.complete')
    let i = 0;
    $contents.forEach((edit) => {
        i++
        edit.innerHTML = i == 3 ? `<input type="datetime-local" name = "${edit.parentNode.classList}">` : `<input type="text" name = "${edit.parentNode.classList}">`
    })
    e.style.display = 'none'
    completeBtn.style.display = 'block'
}

function completeEdit() {
    const $contents = document.querySelectorAll('.postPage .postPage-Info input')
    window.location.href = `edit.php?idx=${$contents[0].parentElement.parentElement.id}&title=${$contents[0].value}&user=${$contents[1].value}&date=${$contents[2].value}&des=${$contents[3].value}`

}

function addMsg() {
    const id = document.querySelector('.title').id
    const msgInfo = document.querySelector('.send-message input')
    if (!msgInfo.value.trim()) return alert("메세지를 입력해주세요");
    location.href = `message.php?idx=${id}&msg=${msgInfo.value}`

}

