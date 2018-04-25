var postBtn = document.getElementById("button-load");
var postDiv = document.getElementById("portfolio-posts");
var postBtn2 = document.getElementById("quick-add-button");
var deletebtn = document.getElementById("button-delete");

// show posts

if (postBtn){
postBtn.addEventListener("click" , function(){
var ourRequest = new XMLHttpRequest();
ourRequest.open('GET', 'http://localhost:8888/wordpress-test/wp-json/wp/v2/posts');
ourRequest.onload = function() {
  if (ourRequest.status >= 200 && ourRequest.status < 400) {
    var data = JSON.parse(ourRequest.responseText);
    console.log(data);
    createHTML(data);
    postBtn.remove();
  } else {
    console.log("We connected to the server, but it returned an error.");
  }
};
ourRequest.onerror = function() {
  console.log("Connection error");
};
ourRequest.send();
});
}

// create html from posbtnresponse 
function createHTML(postdata){
var ourHTMLString= '';
for(i=0; i<postdata.length; i++){
ourHTMLString += '<h2>' + postdata[i].title.rendered + '</h2>';
ourHTMLString += postdata[i].content.rendered;
}
postDiv.innerHTML = ourHTMLString;

}

//quick add posts
if (postBtn2){
	postBtn2.addEventListener("click", function(){
	var ourPostData = {
		"title":document.querySelector('.admin-quick-add [name="title"]').value,
		"content":document.querySelector('.admin-quick-add [name="content"]').value,
		"status": "publish"
	}
	var createPost = new XMLHttpRequest();
	createPost.open('POST', 'http://localhost:8888/wordpress-test/wp-json/wp/v2/posts');
	createPost.setRequestHeader("X-WP-Nonce", magicalData.nonce);
	createPost.setRequestHeader("Content-type", "application/json;charset=UTF-8");
	createPost.send(JSON.stringify(ourPostData));
	alert("din post har lagts till");
	document.querySelector('.admin-quick-add [name="title"]').value = '';
	document.querySelector('.admin-quick-add [name="content"]').value = '';
	});
}


