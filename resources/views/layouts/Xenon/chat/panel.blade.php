<div id="chat" class="fixed"><!-- start: Chat Section -->
			
  <div class="chat-inner">
  
    
    <h2 class="chat-header">
      <a  href="#" class="chat-close" data-toggle="chat">
        <i class="fa-plus-circle rotate-45deg"></i>
      </a>
      
      Chat
      <span class="badge badge-success is-hidden">0</span>
    </h2>
    
    <script type="text/javascript">
    // Here is just a sample how to open chat conversation box
    jQuery(document).ready(function($)
    {
      var $chat_conversation = $(".chat-conversation");
      
      $(".chat-group a").on('click', function(ev)
      {
        ev.preventDefault();
        
        $chat_conversation.toggleClass('is-open');
        
        $(".chat-conversation textarea").trigger('autosize.resize').focus();
      });
      
      $(".conversation-close").on('click', function(ev)
      {
        ev.preventDefault();
        $chat_conversation.removeClass('is-open');
      });
    });
    </script>
    
    
    <div class="chat-group">
      <strong>Favorites</strong>
      
      <a href="#"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
      <a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
      <a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
      <a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
      <a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
    </div>
    
    
    <div class="chat-group">
      <strong>Work</strong>
      
      <a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
      <a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
      <a href="#"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
    </div>
    
    
    <div class="chat-group">
      <strong>Other</strong>
      
      <a href="#"><span class="user-status is-online"></span> <em>Dennis E. Johnson</em></a>
      <a href="#"><span class="user-status is-online"></span> <em>Stuart A. Shire</em></a>
      <a href="#"><span class="user-status is-online"></span> <em>Janet I. Matas</em></a>
      <a href="#"><span class="user-status is-online"></span> <em>Mindy A. Smith</em></a>
      <a href="#"><span class="user-status is-busy"></span> <em>Herman S. Foltz</em></a>
      <a href="#"><span class="user-status is-busy"></span> <em>Gregory E. Robie</em></a>
      <a href="#"><span class="user-status is-busy"></span> <em>Nellie T. Foreman</em></a>
      <a href="#"><span class="user-status is-busy"></span> <em>William R. Miller</em></a>
      <a href="#"><span class="user-status is-idle"></span> <em>Vivian J. Hall</em></a>
      <a href="#"><span class="user-status is-offline"></span> <em>Melinda A. Anderson</em></a>
      <a href="#"><span class="user-status is-offline"></span> <em>Gary M. Mooneyham</em></a>
      <a href="#"><span class="user-status is-offline"></span> <em>Robert C. Medina</em></a>
      <a href="#"><span class="user-status is-offline"></span> <em>Dylan C. Bernal</em></a>
      <a href="#"><span class="user-status is-offline"></span> <em>Marc P. Sanborn</em></a>
      <a href="#"><span class="user-status is-offline"></span> <em>Kenneth M. Rochester</em></a>
      <a href="#"><span class="user-status is-offline"></span> <em>Rachael D. Carpenter</em></a>
    </div>
  
  </div>
  
  <!-- conversation template -->
  <div class="chat-conversation">
    
    <div class="conversation-header">
      <a href="#" class="conversation-close">
        &times;
      </a>
      
      <span class="user-status is-online"></span>
      <span class="display-name">Arlind Nushi</span> 
      <small>Online</small>
    </div>
    
    <ul class="conversation-body">	
      <li>
        <span class="user">Arlind Nushi</span>
        <span class="time">09:00</span>
        <p>Are you here?</p>
      </li>
      <li class="odd">
        <span class="user">Brandon S. Young</span>
        <span class="time">09:25</span>
        <p>This message is pre-queued.</p>
      </li>
      <li>
        <span class="user">Brandon S. Young</span>
        <span class="time">09:26</span>
        <p>Whohoo!</p>
      </li>
      <li class="odd">
        <span class="user">Arlind Nushi</span>
        <span class="time">09:27</span>
        <p>Do you like it?</p>
      </li>
    </ul>
    
    <div class="chat-textarea">
      <textarea class="form-control autogrow" placeholder="Type your message"></textarea>
    </div>
    
  </div>
  
<!-- end: Chat Section -->
</div>

</div>

<div class="footer-sticked-chat"><!-- Start: Footer Sticked Chat -->

  <script type="text/javascript">
function toggleSampleChatWindow()
{
  var $chat_win = jQuery("#sample-chat-window");

  $chat_win.toggleClass('open');

  if($chat_win.hasClass('open'))
  {
    var $messages = $chat_win.find('.ps-scrollbar');

    if($.isFunction($.fn.perfectScrollbar))
    {
      $messages.perfectScrollbar('destroy');

      setTimeout(function(){
        $messages.perfectScrollbar();
        $chat_win.find('.form-control').focus();
      }, 300);
    }
  }

  jQuery("#sample-chat-window form").on('submit', function(ev)
  {
    ev.preventDefault();
  });
}

jQuery(document).ready(function($)
{
  $(".footer-sticked-chat .chat-user, .other-conversations-list a").on('click', function(ev)
  {
    ev.preventDefault();
    toggleSampleChatWindow();
  });

  $(".mobile-chat-toggle").on('click', function(ev)
  {
    ev.preventDefault();

    $(".footer-sticked-chat").toggleClass('mobile-is-visible');
  });
});
</script>

<ul class="chat-conversations list-unstyled">

  <!-- Extra Chat Conversations collected not to exceed window width -->
  <li class="browse-more">
    <a href="#" class="chat-user">
      <i class="linecons-comment"></i>
      <span>3</span>
    </a>

    <!-- These conversations are hidden in screen -->
    <ul class="other-conversations-list">
      <li>
        <!-- Minimal User Info Link -->
        <a href="#" >
          Catherine J. Watkins
          <span>&times;</span>
        </a>
      </li>
      <li>
        <!-- Minimal User Info Link -->
        <a href="#" >
          Nicholas R. Walker
          <span>&times;</span>
        </a>
      </li>
      <li>
        <!-- Minimal User Info Link -->
        <a href="#" >
          Susan J. Best
          <span>&times;</span>
        </a>
      </li>
    </ul>
  </li>

  <li id="sample-chat-window">
    <!-- User Info Link -->
    <a href="#"  class="chat-user">
      <span class="user-status is-online"></span>
      Art Ramadani
    </a>

    <span class="badge badge-purple">4</span>

    <!-- Conversation Window -->
    <div class="conversation-window">
      <!-- User Info Link in header (used to close the chat bar) -->
      <a href="#"  class="chat-user">
        <span class="close">&times;</span>

        <span class="user-status is-online"></span>
        Art Ramadani
      </a>

      <ul class="conversation-messages ps-scrollbar ps-scroll-down">

        <!-- Will indicate time -->
        <li class="time">Thursday 04, December '14</li>

        <li>
          <div class="user-info">
            <a href="#">
              <img src="assets/images/user-1.png" width="30" height="30" alt="user-image" />
            </a>
          </div>
          <div class="message-entry">
            <p>Hello John, how are you?</p>
          </div>
        </li>

        <li class="me"><!-- adding class="me" will indicate that "you" are sending a message -->
          <div class="message-entry">
            <p>Hi Art, I am fine :) How about you?</p>
          </div>
          <div class="user-info">
            <a href="#">
              <img src="assets/images/user-4.png" width="30" height="30" alt="user-image" />
            </a>
          </div>
        </li>

        <li>
          <div class="user-info">
            <a href="#">
              <img src="assets/images/user-1.png" width="30" height="30" alt="user-image" />
            </a>
          </div>
          <div class="message-entry">
            <p>Warmth his law design say are person. Pronounce suspected in belonging conveying ye repulsive.</p>
          </div>
        </li>

        <li class="me"><!-- adding class="me" will indicate that "you" are sending a message -->
          <div class="message-entry">
            <p>Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper.</p>
            <p>Timed voice share led his widen noisy young.</p>
            <p>His six detract besides add moonlight newspaper.</p>
          </div>
          <div class="user-info">
            <a href="#">
              <img src="assets/images/user-4.png" width="30" height="30" alt="user-image" />
            </a>
          </div>
        </li>

        <li>
          <div class="user-info">
            <a href="#">
              <img src="assets/images/user-1.png" width="30" height="30" alt="user-image" />
            </a>
          </div>
          <div class="message-entry">
            <p>Hello John, how are you?</p>
          </div>
        </li>

        <li class="me"><!-- adding class="me" will indicate that "you" are sending a message -->
          <div class="message-entry">
            <p>Hi Art, I am fine :) How about you?</p>
          </div>
          <div class="user-info">
            <a href="#">
              <img src="assets/images/user-4.png" width="30" height="30" alt="user-image" />
            </a>
          </div>
        </li>

        <li>
          <div class="user-info">
            <a href="#">
              <img src="assets/images/user-1.png" width="30" height="30" alt="user-image" />
            </a>
          </div>
          <div class="message-entry">
            <p>Hello John, how are you?</p>
          </div>
        </li>

        <!-- Will indicate time -->
        <li class="time">Today 17:12</li>

        <li class="me"><!-- adding class="me" will indicate that "you" are sending a message -->
          <div class="message-entry">
            <p>Hi Art, I am fine :) How about you?</p>

                        </div>
          <div class="user-info">
            <a href="#">
              <img src="assets/images/user-4.png" width="30" height="30" alt="user-image" />
            </a>
          </div>
        </li>

      </ul>

      <form method="post" class="chat-form">
        <input type="text" class="form-control"  placeholder="Enter your message..." />
      </form>
    </div>
  </li>

  <li>
    <!-- User Info Link -->
    <a href="#"  class="chat-user">
      <span class="user-status is-idle"></span>
      Ylli Pylla
    </a>
  </li>

  <li>
    <!-- User Info Link -->
    <a href="#"  class="chat-user">
      <span class="user-status is-busy"></span>
      Arlind Nushi
    </a>
  </li>

</ul>

<a href="#" class="mobile-chat-toggle">
  <i class="linecons-comment"></i>
  <span class="num">6</span>
  <span class="badge badge-purple">4</span>
</a>

<!-- End: Footer Sticked Chat -->
</div>