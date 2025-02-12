function getText(e){
    const text = e.closest('td').previousElementSibling.textContent
    window.location.href = 'remove.php?data=' + text
}