<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<style>
    @import url(https://fonts.googleapis.com/css?family=Lato:400,700);
 *, *:before, *:after {
	 box-sizing: border-box;
}
li{
  list-style: none;
}
 body {
	 background: #c5ddeb;
	 font: 14px/20px "Lato", Arial, sans-serif;
	 padding: 40px 0;
	 color: white;
}
 .container {
	 margin: 0 auto;
	 width: 750px;
	 background: #444753;
	 border-radius: 5px;
}
 .people-list {
	 width: 260px;
	 float: left;
}
 .people-list .search {
	 padding: 20px;
}
 .people-list input {
	 border-radius: 3px;
	 border: none;
	 padding: 14px;
	 color: white;
	 background: #6a6c75;
	 width: 90%;
	 font-size: 14px;
}
 .people-list .fa-search {
	 position: relative;
	 left: -25px;
}
 .people-list ul {
	 padding: 20px;
	 height: 770px;
}
 .people-list ul li {
	 padding-bottom: 20px;
}
 .people-list img {
	 float: left;
}
 .people-list .about {
	 float: left;
	 margin-top: 8px;
}
 .people-list .about {
	 padding-left: 8px;
}
 .people-list .status {
	 color: #92959e;
}
 .chat {
	 width: 490px;
	 float: left;
	 background: #f2f5f8;
	 border-top-right-radius: 5px;
	 border-bottom-right-radius: 5px;
	 color: #434651;
}
 .chat .chat-header {
	 padding: 20px;
	 border-bottom: 2px solid white;
}
 .chat .chat-header img {
	 float: left;
}
 .chat .chat-header .chat-about {
	 float: left;
	 padding-left: 10px;
	 margin-top: 6px;
}
 .chat .chat-header .chat-with {
	 font-weight: bold;
	 font-size: 16px;
}
 .chat .chat-header .chat-num-messages {
	 color: #92959e;
}
 .chat .chat-header .fa-star {
	 float: right;
	 color: #d8dadf;
	 font-size: 20px;
	 margin-top: 12px;
}
 .chat .chat-history {
	 padding: 30px 30px 20px;
	 border-bottom: 2px solid white;
	 overflow-y: scroll;
	 height: 575px;
}
 .chat .chat-history .message-data {
	 margin-bottom: 15px;
}
 .chat .chat-history .message-data-time {
	 color: #a8aab1;
	 padding-left: 6px;
}
 .chat .chat-history .message {
	 color: white;
	 padding: 18px 20px;
	 line-height: 26px;
	 font-size: 16px;
	 border-radius: 7px;
	 margin-bottom: 30px;
	 width: 90%;
	 position: relative;
}
 .chat .chat-history .message:after {
	 bottom: 100%;
	 left: 7%;
	 border: solid transparent;
	 content: " ";
	 height: 0;
	 width: 0;
	 position: absolute;
	 pointer-events: none;
	 border-bottom-color: #86bb71;
	 border-width: 10px;
	 margin-left: -10px;
}
 .chat .chat-history .my-message {
	 background: #86bb71;
}
 .chat .chat-history .other-message {
	 background: #94c2ed;
}
 .chat .chat-history .other-message:after {
	 border-bottom-color: #94c2ed;
	 left: 93%;
}
 .chat .chat-message {
	 padding: 30px;
}
 .chat .chat-message textarea {
	 width: 100%;
	 border: none;
	 padding: 10px 20px;
	 font: 14px/22px "Lato", Arial, sans-serif;
	 margin-bottom: 10px;
	 border-radius: 5px;
	 resize: none;
}
 .chat .chat-message .fa-file-o, .chat .chat-message .fa-file-image-o {
	 font-size: 16px;
	 color: gray;
	 cursor: pointer;
}
 .chat .chat-message button {
	 float: right;
	 color: #94c2ed;
	 font-size: 16px;
	 text-transform: uppercase;
	 border: none;
	 cursor: pointer;
	 font-weight: bold;
	 background: #f2f5f8;
}
 .chat .chat-message button:hover {
	 color: #75b1e8;
}
 ., .offline, .me {
	 margin-right: 3px;
	 font-size: 10px;
}
 . {
	 color: #86bb71;
}
 .offline {
	 color: #e38968;
}
 .me {
	 color: #94c2ed;
}
 .align-left {
	 text-align: left;
}
 .align-right {
	 text-align: right;
}
 .float-right {
	 float: right;
}
 .clearfix:after {
	 visibility: hidden;
	 display: block;
	 font-size: 0;
	 content: " ";
	 clear: both;
	 height: 0;
}
 
    </style>

<div class="container clearfix">
<div class="people-list" id="people-list">
  <div class="search">
    <input type="text" placeholder="search" id="manager-filter" />
    <i class="fa fa-search"></i>
  </div>
   <ul class="list" id="<?php if($this->User_model->get_user($this->session->userdata('user_id'))->role=='user'){echo 'manager-list';}else{echo 'user-list';}?>">
   
<div class="chat">
  <div class="chat-header clearfix">
    <img id="chat-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg" alt="avatar" />
    
    <div class="chat-about">
      <div class="chat-with">Chat with <span id="chat-name">Vincent Porter</span></div>
    </div>
    <i class="fa fa-star"></i>
  </div> 
  
  <div class="chat-history" id="chat-history">
    <ul id="messageContainer">
      
    </ul>
    
  </div> 
  
  <div class="chat-message clearfix">
    <textarea name="message-to-send" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
            
    <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
    <i class="fa fa-file-image-o"></i>
    
    <button onclick='send()'>Send</button>

  </div> 
  
</div> 

</div> 

<script>
document.querySelector("body > div > div.chat > div.chat-header.clearfix").style.display="none";
const chatList = document.querySelector('.list');
var name;

function getMassages(){
          $.ajax({
                    url: "<?php echo base_url()?>assets/js/chat.php",
                    type: "POST",
                    data: {
                        action: "getMessages",
                        sender: sender,
                        receiver:name
                    },
                    dataType: "json",
                    success: function (data) {
                      messages=data;
                      var messageContainer = document.getElementById("messageContainer");

                    
                    messages.forEach(function (message) {
                        var messageDiv = document.createElement("div");
                        if (message.sender === "<?php echo $user->name ?>") {                       
                            messageDiv.innerHTML = `
                                <li>
                                  <div class="message-data">
                                    <span class="message-data-name"></span>
                                    <span class="message-data-time">${message.timestamp}</span>
                                  </div>
                                  <div class="message my-message">
                                    ${message.message}
                                  </div>
                                </li>
                            `;
                        } else {                         
                            messageDiv.innerHTML = `
                                <li class="clearfix">
                                    <div class="message-data align-right">
                                      <span class="message-data-time">${message.timestamp}</span> &nbsp; &nbsp;
                                    </div>
                                    <div class="message other-message float-right">
                                      ${message.message}
                                    </div>
                                </li>
                            `;
                        }
                        messageContainer.appendChild(messageDiv);
                      });
                      document.querySelector("#chat-history").scrollTop=document.querySelector("#chat-history").scrollHeight;
                    }
                });
        }

chatList.addEventListener('click', function (event) {
    messageContainer.innerHTML="";
    document.querySelector("body > div > div.chat > div.chat-header.clearfix").style.display="block";
    
    if (event.target && event.target.matches('li')) {
        
        name = event.target.querySelector('.name').textContent;
        const imgSrc = event.target.querySelector('img').getAttribute('src');
        
        document.querySelector("#chat-img").src=imgSrc;
        document.getElementById("chat-name").innerHTML=name;

        sender='<?php echo $user->name?>';

        getMassages();
            }
});

        const Assistants = <?php echo json_encode($Assistants); ?>;
const input = document.getElementById('manager-filter');
const managerList = document.getElementById('manager-list');
const userList = document.getElementById('user-list');

function filterManagers() {
    const searchTerm = input.value.toLowerCase();

    managerList.innerHTML = '';

    const filteredManagers = Assistants.filter(Assistant => Assistant.name.toLowerCase().includes(searchTerm));

    filteredManagers.forEach(Assistant => {
        const listItem = document.createElement('li');
        listItem.className = 'clearfix';

        const img = document.createElement('img');
        img.src = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_10.jpg';
        img.alt = 'avatar';

        const aboutDiv = document.createElement('div');
        aboutDiv.className = 'about';

        const nameDiv = document.createElement('div');
        nameDiv.className = 'name';
        nameDiv.textContent = Assistant.name;

        const statusDiv = document.createElement('div');
        statusDiv.className = 'status';

        aboutDiv.appendChild(nameDiv);
        aboutDiv.appendChild(statusDiv);

        listItem.appendChild(img);
        listItem.appendChild(aboutDiv);

        managerList.appendChild(listItem);
    });
}

function filterUsers(usersJson) {
    const searchTerm = input.value.toLowerCase();

    userList.innerHTML = '';

    try {
        const users = JSON.parse(usersJson);

        const filteredUsers = users.filter(user => user.toLowerCase().includes(searchTerm));

        filteredUsers.forEach(user => {
            const listItem = document.createElement('li');
            listItem.className = 'clearfix';

            const img = document.createElement('img');
            img.src = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_10.jpg';
            img.alt = 'avatar';

            const aboutDiv = document.createElement('div');
            aboutDiv.className = 'about';

            const nameDiv = document.createElement('div');
            nameDiv.className = 'name';
            nameDiv.textContent = user; 

            const statusDiv = document.createElement('div');
            statusDiv.className = 'status';

            aboutDiv.appendChild(nameDiv);
            aboutDiv.appendChild(statusDiv);

            listItem.appendChild(img);
            listItem.appendChild(aboutDiv);

            userList.appendChild(listItem);
        });
    } catch (error) {
        console.error('Error parsing JSON:', error);
    }
}

input.addEventListener('input', filterManagers);


if (managerList) {
  filterManagers();
  
} else {
  $.ajax({
        url: "<?php echo base_url()?>assets/js/chat.php",
        type: "Post",
        async: true,
        data: { 
          action: "getUsers",
          manager:'<?php echo $user->name?>'
        },
        success: function (data) {
          users=data;
           console.log(data);
           filterUsers(users)
        },
    }); 
}

function send(){
  name=document.querySelector("#chat-name").innerHTML;
  console.log(name);
  $.ajax({
        url:"<?php echo base_url()?>assets/js/chat.php",
        type: "Post",
        async: true,
        data: { 
          action: "sendMessage",
          sender:'<?php echo $user->name?>',
          receiver:name,
          message:document.querySelector("#message-to-send").value
        },
        success: function (data) {
          getMassages();
          const messageTextArea = document.getElementById('message-to-send');
          messageTextArea.value = '';

        },
    }); 
}


var intervalId = setInterval(getMassages, 2000);


var intervalId = setInterval(function() {
}, 2000);

    </script>

