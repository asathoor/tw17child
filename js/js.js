//console.log("Cheers! From ../js/js.js in tw17child"); // test

/* Add Post via AJAX */
let quickAddButton = document.querySelector('#quick-add-button');

if (quickAddButton){
  quickAddButton.addEventListener('click', function(){

    // send these data
    let ourPostData = {
      "title" : document.querySelector(".admin-quick-add [name='title']").value,
      "content" : document.querySelector(".admin-quick-add [name='content']").value,
      "status" : "publish"
    }

    // send post
    let createPost = new XMLHttpRequest();
    createPost.open('POST','http://localhost/wordpress/wp-json/wp/v2/posts');
    createPost.setRequestHeader("X-WP-Nonce", magicalData.nonce ); // security: se functions.php nonce
    createPost.setRequestHeader("Content-Type","application/json;charset=UTF-8");
    createPost.send(JSON.stringify(ourPostData));

    createPost.onreadystatechange = function(){
      if (createPost.readyState == 4) {
        if (createPost.status == 201) {
          document.querySelector(".admin-quick-add [name='title']").value = '';
          document.querySelector(".admin-quick-add [name='content']").value = '';
        } else {
          alert('Try to add some content in the fields. If it still does not work ask the admin.');
        }
      }
    }

  });
}
