<script type="text/javascript" src="jquery.js">
    <script type="text/javascript">
    
    $(document).ready(function(){
      $("#feedback_button").click(function(){
        form();
      });
    });
        
    function form()
    {
      $("form").slideToggle();
    }
    </script>