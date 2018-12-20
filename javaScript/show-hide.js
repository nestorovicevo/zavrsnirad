function myFunction() {
    var list = document.getElementById('comment-list');
    var button = document.getElementById('myButton');

    if (list.style.display === 'none') {
      list.style.display = 'block';
      button.textContent = 'Hide comments';
    } else {
      list.style.display = 'none';
      button.textContent = 'Show comments';
    }
  }