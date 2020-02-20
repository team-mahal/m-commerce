@if ($comment_single->replies->count())
   <ul class="children" style="margin-left: {{ ($depth+2)*3 }}px;">
      @foreach ($comment_single->replies as $key => $reply)
         <li class="comment">

            <div class="comment-body">

               <div class="meta-data">
                  <div class="reply">
                     <a href="#comment-form" class="comment-reply-link">
                        <i class="fa fa-reply"></i>
                     </a>
                  </div>
                  <div class="comment-author">
                     <a href="#">{{ $reply->user->name }}</a>
                     <?php 
                        $timestamp = strtotime($reply->created_at);
                        $date = date('d M Y' ,$timestamp);
                        $time = date('h:i A' ,$timestamp);
                     ?>
                  </div>
                  <div class="comment-content">
                     <p><?=  $reply->content; ?></p>
                     <p>
                        <span class="font-weight-light text-muted"><?= $date ?></span>
                        <span class="font-weight-light text-muted"><?= $time ?></span>
                     </p>
                  </div>
               </div>
            </div>
            
              @if(Auth::check())
                        <form action="{{ url('post/commentreplay/'.$comment_single->id) }}" method="post">
                             {{ csrf_field() }}
                            <div class="form-group mb-1">
                               <input class="form-control" type="text" name="content" value="">
                            </div>

                            <div class="form-group mb-1">
                               <button class="btn btn-sm btn-success" type="submit">Reply</button>
                               <button class="btn btn-sm btn-danger cancle-reply" type="reset">Cancle</button>
                            </div>
                        </form>
                    @endif

            @if($reply->replies->count())
               @include('inc.comment_replies',['comment_single' => $comment_single])
            @endif

            

         </li>
      @endforeach
   </ul>
@endif