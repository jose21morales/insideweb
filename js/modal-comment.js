let btnModalComment = document.getElementById('edit-comment');
let modalComment = document.getElementById('show-modal-comment');

btnModalComment.addEventListener("click", function() {
	modalComment.classList.toggle('show-modal__comment');
})