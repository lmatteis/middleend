<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>

<title>Crop Ontology - Curation tool demo</title>
<link href="stylesheets/bundle_common.css?677c14c4c0026f1b894c1fe68b5a6549bff32c5a" media="screen" rel="stylesheet" type="text/css" />
<link href="stylesheets/bundle_github.css?677c14c4c0026f1b894c1fe68b5a6549bff32c5a" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="jquery.treeview.css" />
<link href="stylesheets/style.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script>
var ontologyname = "";
var ontologyid = "<?php echo $ontologyid; ?>";
var searchQuery = "{{searchQuery}}";
</script>
<script type="text/javascript" src="js/main.js"></script>
<!--<script type="text/javascript" src="http://vadikom.com/demos/poshytip/src/jquery.poshytip.js"></script> 
<link href="http://vadikom.com/demos/poshytip/src/tip-twitter/tip-twitter.css" media="screen" rel="stylesheet" type="text/css" />-->
 
</head> 
 
<body class="explore"> 
    <div id="main" class=""> 
        <div id="header" style="height: 100px;"> 
 
            
            <div id="logo"> 
                <h1><a href="/">Crop Ontology - Curation tool demo</a></h1>
            </div> 
        </div> 
        <div class="site"> 
<div class="pagehead"> 
    <h2 style="margin:5px; border-bottom:0 !important; padding:0;"> 
 
          <a href="#" id="dologin" class="feed" style="background: none">Login</a>
          <a href="#" id="doregister" class="feed" style="background: none">Register</a>
          <a href="#" id="doprofile" class="feed" style="background: none; display: none;"></a>
          <a href="#" id="dologout" class="feed" style="background: none; display: none;">Logout</a>
          <a class="feed" href="http://test.development.grinfo.net/Luca/datadict/comments">Subscribe to all comments</a> 

          <a href="http://annotation-tool.appspot.com/" class="feed" style="background: none; padding-right: 20px;">Annotation Tool</a>
          <a href="http://www.screencast.com/users/sktrdie/folders/Jing/media/744c1610-b716-46cb-bcdd-ddc9752111d1" class="feed" style="background: none; padding-right: 20px;">Video Tutorial</a>
    </h2> 
    <form action="/search" method="get">
  <h1><input id="search" type="text" name="q" /><button type="submit" class="minibutton">Search</button></h1> 
  </form>
</div> 
 
            <div class="left browser-content"> 
                <div class="cont"> 
                    <!--<div class="filterbox">
                          <input type="search" placeholder="Find a term">
                    </div>--> 
 
                    <ul class="treeview" id="root"> 
 
                    </ul> 
                </div> 
            </div><!-- end left --> 
<div class="right"> 
 
<div class="browser-content browser" style="margin:0;"> 
  <div class="filterbar"> 
    <ul class="filters"> 
        <span id="term_id" style="display: none;"></span>
      <li data-filter="read" ><a target="_blank" href="#" class="term_id">Name</a></li> 
    </ul> 
 
    <ul class="sorts"> 
      <li data-sort="created" class="desc" id="general">General</li> 
      <li data-sort="created" id="relationships">Relationships</li> 
      <li data-sort="popularity" id="new-comments">Comments</li> 
    </ul> 
  </div> 
  <div style="display: none; color: #990000;" class="context-loader">Sending Request...</div> 
  <div class="none" style="display: none; opacity: 1;"> 
    <p>No pull requests to show</p> 
  </div> 
  <div style="display: none;" class="error"> 
    <p>There was an error with the request</p> 
  </div> 
<div id="pages"> 
 
    <div class="new-comments" style="margin: 0px 10px; display: none;"> 
 
    <div class="comment-list"> 
        <div class="comment normal-comment" id="issuecomment-711523"> 
          <div class="cmeta"> 
            <p class="author" style="width: 250px;"> 
              <span class="gravatar"><img width="20" height="20" alt="" src="http://www.naturaplantif.ro/Images/actiuni/meniu_plant.png"></span> 
              <strong class="author"><a href="/paulirish">paulirish</a></strong> 
              <em class="action-text"> 
                <a href="#issuecomment-711523"> 
                commented
                </a> 
              </em> 
              
            </p> 
            <p class="info"> 
              <em class="date"><abbr title="2011-01-26 15:47:04" class="relatize relatized">about 8 hours ago</abbr></em> 
              <span class="icon"></span> 
            </p> 
          </div> 
 
          
 
          <div class="body"> 
            
            <div class="formatted-content"> 
              
              
              <div class="content-body wikistyle"> 
                <p>Does this patch change <code>foo/stuff.html</code> to <code>foo/stuff.html/</code> ?</p> 
              </div> 
            </div> 
            
          </div> 
        </div><!-- /comment --> 
    </div><!-- /comment-list --> 
 
 
    <h3>Comment</h3> 
    <div class="comment-form previewable-comment-form"> 
        
        <textarea id="comment_body_430" tabindex="1" name="comment[body]"></textarea> 
 
    </div><!-- /comment-form --> 
    <div class="form-actions"> 
        <button tabindex="2" class="classy" type="submit"><span>Comment</span></button> 
    </div> 
    <br> 
 
 
    </div><!-- end new-comments --> 
 
    <div class="general description" > 
    </div><!-- end general --> 

    <div class="relationships" style="display:none">
    </div><!--/relationships-->
</div><!-- /pages --> 
</div><!-- /browser-content --> 
</div><!-- end right --> 
 
 
 
        </div> 
    <div style="clear:both;"></div> 
    </div><!-- /main --> 
 
 
<div id="mylogin" style="position: absolute; top:50%; left: 50%; margin-top: -200px; margin-left: -200px; display: none;"> 
 
    <div class="login_form" id="login" style=""> 
      <form method="post" id="login_form" action="/session"><div style="margin: 0pt; padding: 0pt;"><input type="hidden" value="5cdd9e664d321b89797b0ed43576d21152bc53e9" name="authenticity_token"></div>      <h1>Log in<a id="login-close"></a></h1> 
      <div class="formbody"> 
        
            <div class="context-loader" style="display: none; top:107px;">Sending Request...</div> 
        <div class="error_box" style="display: none;">Incorrect login or password.</div> 
        
        <label for="login"> 
            Username<br> 
            <input type="text" value="" tabindex="1" style="width: 21em;" name="username" id="login_field" class="text"> 
        </label> 
 
        <label for="password"> 
            Password 
            <br> 
            <input type="password" value="" tabindex="2" style="width: 21em;" name="password" id="password" class="text"> 
        </label> 
 
        <label class="submit_btn"> 
                                    <input type="submit" value="Log in" tabindex="3" name="commit"> 
        </label> 
      </div> 
    </form>  </div> 
 
</div><!-- /mylogin --> 
<div id="myregister" style="position: absolute; top:50%; left: 50%; margin-top: -200px; margin-left: -200px; display: none;"> 
 
    <div class="login_form" id="login" style=""> 
      <form method="post" id="register_form" action=""><div style="margin: 0pt; padding: 0pt;"><input type="hidden" value="5cdd9e664d321b89797b0ed43576d21152bc53e9" name="authenticity_token"></div>      <h1>Register<a id="register-close"></a></h1> 
      <div class="formbody"> 
        
            <div class="context-loader" style="display: none; top:107px;">Sending Request...</div> 
        <div class="error_box" style="display: none;">Incorrect login or password.</div> 
        
        <label for="login"> 
            Username<br> 
            <input type="text" value="" tabindex="1" style="width: 21em;" name="username" id="login_field" class="text"> 
        </label> 
        <label for="email"> 
            Email<br> 
            <input type="text" value="" tabindex="1" style="width: 21em;" name="email" class="text"> 
        </label> 
 
        <label for="password"> 
            Password 
            <br> 
            <input type="password" value="" tabindex="2" style="width: 21em;" name="password" id="password" class="text"> 
        </label> 
 
        <label class="submit_btn"> 
            <input type="submit" value="Register" tabindex="3" name="commit"> 
        </label> 
      </div> 
    </form>  </div> 
 
</div><!-- /myregister --> 
 
<div class="toolbar" style="display: none; position: absolute; top:0; left:0;">
    <div class="toolbar_edit"></div>
    <div class="toolbar_remove"></div>
</div>
<!--<iframe name="upload_iframe" src="/add-attribute" style="display: none;"></iframe>-->

 
<!--[if IE 8]>
<script type="text/javascript" charset="utf-8">
  $(document.body).addClass("ie8")
</script>
<![endif]--> 
 
<!--[if IE 7]>
<script type="text/javascript" charset="utf-8">
  $(document.body).addClass("ie7")
</script>
<![endif]--> 
 
</body> 
</html> 
