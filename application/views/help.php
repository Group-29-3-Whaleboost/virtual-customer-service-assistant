<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<?php
  print_r($managers);
  print_r($this->User_model->get_user($this->session->userdata('user_id'))->role);
  print_r($user->name);
?>
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
  <!--  <li class="clearfix">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01.jpg" alt="avatar" />
      <div class="about">
        <div class="name">Vincent Porter</div>
        <div class="status">
           
        </div>
      </div>
    </li>
    
    <li class="clearfix">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_02.jpg" alt="avatar" />
      <div class="about">
        <div class="name">Aiden Chavez</div>
        <div class="status">
        </div>
      </div>
    </li>
    
    <li class="clearfix">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_03.jpg" alt="avatar" />
      <div class="about">
        <div class="name">Mike Thomas</div>
        <div class="status">
           
        </div>
      </div>
    </li>
    
    <li class="clearfix">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_04.jpg" alt="avatar" />
      <div class="about">
        <div class="name">Erica Hughes</div>
        <div class="status">
           
        </div>
      </div>
    </li>
    
    <li class="clearfix">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_05.jpg" alt="avatar" />
      <div class="about">
        <div class="name">Ginger Johnston</div>
        <div class="status">
           
        </div>
      </div>
    </li>
    
    <li class="clearfix">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_06.jpg" alt="avatar" />
      <div class="about">
        <div class="name">Tracy Carpenter</div>
        <div class="status">
        </div>
      </div>
    </li>
    
    <li class="clearfix">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_07.jpg" alt="avatar" />
      <div class="about">
        <div class="name">Christian Kelly</div>
        <div class="status">
        </div>
      </div>
    </li>
    
    <li class="clearfix">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_08.jpg" alt="avatar" />
      <div class="about">
        <div class="name">Monica Ward</div>
        <div class="status">
           
        </div>
      </div>
    </li>
    
    <li class="clearfix">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_09.jpg" alt="avatar" />
      <div class="about">
        <div class="name">Dean Henry</div>
        <div class="status">
        </div>
      </div>
    </li>
    
    <li class="clearfix">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_10.jpg" alt="avatar" />
      <div class="about">
        <div class="name">Peyton Mckinney</div>
        <div class="status">
           
        </div>
      </div>
    </li>-->
    <?php
//   foreach ($managers as $manager) {
//     echo '<li class="clearfix">';
//     echo '    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_02.jpg" alt="avatar" />';
//     echo '    <div class="about">';
//     echo '        <div class="name">' . htmlspecialchars($manager->manager) . '</div>';
//     echo '        <div class="status">';
//     echo '        </div>';
//     echo '    </div>';
//     echo '</li>';
// }
?>
  </ul>

</div>

    <!-- <ul id="manager-list">
        The list of managers will be displayed here
    </ul> -->

    <!-- <div id="messageContainer">
        Messages will be displayed here
    </div> -->
   
<div class="chat">
  <div class="chat-header clearfix">
    <img id="chat-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01_green.jpg" alt="avatar" />
    
    <div class="chat-about">
      <div class="chat-with">Chat with <span id="chat-name">Vincent Porter</span></div>
    </div>
    <i class="fa fa-star"></i>
  </div> <!-- end chat-header -->
  
  <div class="chat-history" id="chat-history">
    <ul id="messageContainer">
      <!-- <li class="clearfix">
        <div class="message-data align-right">
          <span class="message-data-time" >10:10 AM, Today</span> &nbsp; &nbsp;
          
        </div>
        <div class="message other-message float-right">
          Hi Vincent, how are you? How is the project coming along?
        </div>
      </li>
      
      <li>
        <div class="message-data">
          <span class="message-data-name"></span>
          <span class="message-data-time">10:12 AM, Today</span>
        </div>
        <div class="message my-message">
          Are we meeting today? Project has been already finished and I have results to show you.
        </div>
      </li>
      
      <li class="clearfix">
        <div class="message-data align-right">
          <span class="message-data-time" >10:14 AM, Today</span> &nbsp; &nbsp;
          
        </div>
        <div class="message other-message float-right">
          Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so? Have you faced any problems at the last phase of the project?
        </div>
      </li>
      
      <li>
        <div class="message-data">
          <span class="message-data-name"></span>
          <span class="message-data-time">10:20 AM, Today</span>
        </div>
        <div class="message my-message">
          Actually everything was fine. I'm very excited to show this to our team.
        </div>
      </li>
      
      <li>
        <div class="message-data">
          <span class="message-data-name"></span>
          <span class="message-data-time">10:31 AM, Today</span>
        </div>
        
        <i class="fa fa-circle " style="color: #AED2A6"></i>
        <i class="fa fa-circle " style="color:#DAE9DA"></i>
      </li> -->
      
    </ul>
    
  </div> <!-- end chat-history -->
  
  <div class="chat-message clearfix">
    <textarea name="message-to-send" id="message-to-send" placeholder ="Type your message" rows="3"></textarea>
            
    <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
    <i class="fa fa-file-image-o"></i>
    
    <button onclick='send()'>Send</button>

  </div> <!-- end chat-message -->
  
</div> <!-- end chat -->

</div> <!-- end container -->

<!-- <script id="message-template" type="text/x-handlebars-template">
<li class="clearfix">
<div class="message-data align-right">
  <span class="message-data-time" >{{time}}, Today</span> &nbsp; &nbsp;
  <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
</div>
<div class="message other-message float-right">
  {{messageOutput}}
</div>
</li>
</script>

<script id="message-response-template" type="text/x-handlebars-template">
<li>
<div class="message-data">
  <span class="message-data-name"> Vincent</span>
  <span class="message-data-time">{{time}}, Today</span>
</div>
<div class="message my-message">
  {{response}}
</div>
</li>
</script> -->


<!-- <script>
    (function(){
  
  var chat = {
    messageToSend: '',
    messageResponses: [
      'Why did the web developer leave the restaurant? Because of the table layout.',
      'How do you comfort a JavaScript bug? You console it.',
      'An SQL query enters a bar, approaches two tables and asks: "May I join you?"',
      'What is the most used language in programming? Profanity.',
      'What is the object-oriented way to become wealthy? Inheritance.',
      'An SEO expert walks into a bar, bars, pub, tavern, public house, Irish pub, drinks, beer, alcohol'
    ],
    init: function() {
      this.cacheDOM();
      this.bindEvents();
      this.render();
    },
    cacheDOM: function() {
      this.$chatHistory = $('.chat-history');
      this.$button = $('button');
      this.$textarea = $('#message-to-send');
      this.$chatHistoryList =  this.$chatHistory.find('ul');
    },
    bindEvents: function() {
      this.$button.on('click', this.addMessage.bind(this));
      this.$textarea.on('keyup', this.addMessageEnter.bind(this));
    },
    render: function() {
      this.scrollToBottom();
      if (this.messageToSend.trim() !== '') {
        var template = Handlebars.compile( $("#message-template").html());
        var context = { 
          messageOutput: this.messageToSend,
          time: this.getCurrentTime()
        };

        this.$chatHistoryList.append(template(context));
        this.scrollToBottom();
        this.$textarea.val('');
        
        // responses
        var templateResponse = Handlebars.compile( $("#message-response-template").html());
        var contextResponse = { 
          response: this.getRandomItem(this.messageResponses),
          time: this.getCurrentTime()
        };
        
        setTimeout(function() {
          this.$chatHistoryList.append(templateResponse(contextResponse));
          this.scrollToBottom();
        }.bind(this), 1500);
        
      }
      
    },
    
    addMessage: function() {
      this.messageToSend = this.$textarea.val()
      this.render();         
    },
    addMessageEnter: function(event) {
        // enter was pressed
        if (event.keyCode === 13) {
          this.addMessage();
        }
    },
    scrollToBottom: function() {
       this.$chatHistory.scrollTop(this.$chatHistory[0].scrollHeight);
    },
    getCurrentTime: function() {
      return new Date().toLocaleTimeString().
              replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3");
    },
    getRandomItem: function(arr) {
      return arr[Math.floor(Math.random()*arr.length)];
    }
    
  };
  
  chat.init();
  
  

  
})();

    </script> -->

<script>
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
                      console.log(data);
                      messages=data;
                      var messageContainer = document.getElementById("messageContainer");

                    // Loop through the messages and create HTML elements to display them
                    messages.forEach(function (message) {
                        var messageDiv = document.createElement("div");
                        // messageDiv.innerHTML = `
                        //     <p><strong>Sender:</strong> ${message.sender}</p>
                        //     <p><strong>Receiver:</strong> ${message.receiver}</p>
                        //     <p><strong>Message:</strong> ${message.message}</p>
                        //     <p><strong>Timestamp:</strong> ${message.timestamp}</p>
                        //     <hr>
                        // `;
                        // messageContainer.appendChild(messageDiv);
                        if (message.sender === "<?php echo $user->name ?>") {
                            // Render messages from $user->name
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
                            // Render messages from other senders
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
// Add a click event listener to the <ul> to delegate events for its <li> children
chatList.addEventListener('click', function (event) {
    // Check if the clicked element is an <li>
    if (event.target && event.target.matches('li')) {
        // Extract name and image source values
        name = event.target.querySelector('.name').textContent;
        const imgSrc = event.target.querySelector('img').getAttribute('src');
        
        document.querySelector("#chat-img").src=imgSrc;
        document.getElementById("chat-name").innerHTML=name;

        sender='<?php echo $user->name?>';

        getMassages();
                // $.ajax({
                //     url: "assets/js/chat.php",
                //     type: "POST",
                //     data: {
                //         action: "getMessages",
                //         sender: sender,
                //         receiver:name
                //     },
                //     dataType: "json",
                //     success: function (data) {
                //       console.log(data);
                //       messages=data;
                //       var messageContainer = document.getElementById("messageContainer");

                //     // Loop through the messages and create HTML elements to display them
                //     messages.forEach(function (message) {
                //         var messageDiv = document.createElement("div");
                //         // messageDiv.innerHTML = `
                //         //     <p><strong>Sender:</strong> ${message.sender}</p>
                //         //     <p><strong>Receiver:</strong> ${message.receiver}</p>
                //         //     <p><strong>Message:</strong> ${message.message}</p>
                //         //     <p><strong>Timestamp:</strong> ${message.timestamp}</p>
                //         //     <hr>
                //         // `;
                //         // messageContainer.appendChild(messageDiv);
                //         if (message.sender === "<?php echo $user->name ?>") {
                //             // Render messages from $user->name
                //             messageDiv.innerHTML = `
                //                 <li>
                //                   <div class="message-data">
                //                     <span class="message-data-name"></span>
                //                     <span class="message-data-time">${message.timestamp}</span>
                //                   </div>
                //                   <div class="message my-message">
                //                     ${message.message}
                //                   </div>
                //                 </li>
                //             `;
                //         } else {
                //             // Render messages from other senders
                //             messageDiv.innerHTML = `
                //                 <li class="clearfix">
                //                     <div class="message-data align-right">
                //                       <span class="message-data-time">${message.timestamp}</span> &nbsp; &nbsp;
                //                     </div>
                //                     <div class="message other-message float-right">
                //                       ${message.message}
                //                     </div>
                //                 </li>
                //             `;
                //         }
                //         messageContainer.appendChild(messageDiv);
                //       });

                //     }
                // });
            }
});

        // Replace this part with inline JavaScript if needed
        // Sample manager data (replace this with your actual data)
        const managers = <?php echo json_encode($managers); ?>;
// Get references to the input and list elements
const input = document.getElementById('manager-filter');
const managerList = document.getElementById('manager-list');
const userList = document.getElementById('user-list');

// Function to filter and display managers based on user input
function filterManagers() {
    const searchTerm = input.value.toLowerCase();

    // Clear the previous list of managers
    managerList.innerHTML = '';

    // Filter managers based on the search term
    const filteredManagers = managers.filter(manager => manager.manager.toLowerCase().includes(searchTerm));

    // Display the filtered managers with the specified HTML structure
    filteredManagers.forEach(manager => {
        const listItem = document.createElement('li');
        listItem.className = 'clearfix';

        const img = document.createElement('img');
        img.src = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_10.jpg';
        img.alt = 'avatar';

        const aboutDiv = document.createElement('div');
        aboutDiv.className = 'about';

        const nameDiv = document.createElement('div');
        nameDiv.className = 'name';
        nameDiv.textContent = manager.manager;

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

    // Clear the previous list of users
    userList.innerHTML = '';

    try {
        // Attempt to parse the JSON string into an array
        const users = JSON.parse(usersJson);

        // Filter users based on the search term
        const filteredUsers = users.filter(user => user.toLowerCase().includes(searchTerm));

        // Display the filtered users with the specified HTML structure
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
            nameDiv.textContent = user; // Use the user's name

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



// Add an event listener to the input for real-time filtering
input.addEventListener('input', filterManagers);

// Initial call to populate the list

if (managerList) {
  // The element exists, so call the function A
  filterManagers();
  
} else {
  $.ajax({
        url: "<?php echo base_url()?>assets/js/chat.php",
        // dataType: "json",
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
        // dataType: "json",
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
        },
    }); 
}


// var intervalId = setInterval(getMassages, 2000);


// var intervalId = setInterval(function() {
//    getMassages();

// }, 2000);
 

    </script>

