

              {foreach $blog.replies as $reply}






              
            <hr style="width:100%">
          <div class="col-sm-9">
            
            <div class="row no-gutters align-items-center" style="margin-left:30px">
              <p>{nl2br($reply.content)}</p>



            </div>
            
          </div>
          <div class="col-sm-3 text-center"  >
            <br>
            <a>
              <span class="rounded-circle">
                <img

                {if file_exists("img/user{$reply.user_id}.jpg")} 
                {assign "imgpath" "img/user{$reply.user_id}.jpg"} 
                
                  src="{$base_url}{$imgpath}"
                {else} 
                  src="{$base_url}img/user.jpg" 
                {/if}


                style="width:40px;" alt="User Image">
              </span>
            <p>{$reply.name}</p>
          </a>
            <p>Replied:</p>
            <p>{$reply.created_at}</p>
          </div>
        






















              {/foreach}        
