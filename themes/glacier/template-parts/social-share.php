<ul class="share-icons">


	<!-- TWITTER -->
	<li>
		<a href="https://twitter.com/share?text=<?php echo urlencode(get_the_title()); ?>&amp;url=<?php the_permalink(); ?>" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;"><i class="fa fa-twitter"></i></a>
	</li>

	<!-- FACEBOOK -->
	<li>
		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;"><i class="fa fa-facebook"></i></a>
	</li>

	<!-- GOOGLE PLUS -->
	<li>
		<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;"><i class="fa fa-google-plus"></i></a>
	</li>

	<!-- PINTEREST -->
	<li>
		<a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><i class="fa fa-pinterest"></i></a>
	</li>

	<!-- LINKEDIN -->
	<li>
		<a href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>" onclick="window.open(this.href, 'linkedin-share', 'width=490,height=530');return false;"><i class="fa fa-linkedin"></i></a>
	</li>
	
</ul>