<article class="grid_8"> 
		
	<h1>URI 101</h1>
	
		<p>An obvious place to start looking at institutional identifiers is by looking at what URIs actually are, how they work, and what the current best practice is when it comes to designing them.</p>
		
		<p>URI stands for Uniform Resource Identifier, a set of characters which uniquely identify a specific resource on the internet. URIs consist of two parts, a scheme which defines how a resource can be contacted, followed by a colon and then a scheme-specific part which uniquely identifies the resource. An example of a URI might be <span class="cleanuri">http://google.com</span>, where <span class="cleanuri">http</span> is the scheme and <span class="cleanuri">google.com</span> is the identifier. There are many different URI schemes available which transfer a specific type of content, or transfer it in a specific way. A few examples of common schemes are HTTP, HTTPS, FTP and Mailto, although there are a great many more available.</p>
		
		<p>Linking You focusses specifically on the HTTP (and by extension HTTPS) scheme, since this is the default scheme over which web content is transferred. However, a great many of the suggestions in this toolkit will apply to other schemes.</p>
	
	<h2>Breaking Down URIs</h2>
	
		<p>A HTTP URI is made of two parts, one of which (generally) identifies the server and the other of which (generally) identifies a resource on that server. Exceptions to this will always exist due to the fluid nature of the web &mdash; for example where an institution uses complex load balancing &mdash; but the assumption will apply to the vast majority of cases. An example URI would be <span class="cleanuri">http://example.com/section/resource.htm</span>. In this URI we can begin by looking at the scheme, in this case HTTP. This leaves <span class="cleanuri">example.com/section/resource.htm</span> as the unique part of the identifier; the part which identifies a resource. Everything up until the first slash is the server address or domain, in this case <span class="cleanuri">example.com</span>. Everything after the slash identifies the resource within that domain, in this instance <span class="cleanuri">section/resource.htm</span>.</p>
		
		<p>In the case of academic institutions the domain is mostly unchangeable, being inextricably linked with the institution to which it is associated. A change of domain name for an established institution would be extremely rare, and only happen should the institution substantially change its name (such as the University of Lincolnshire and Humberside becoming the University of Lincoln, and <span class="cleanuri">ulh.ac.uk</span> becoming <span class="cleanuri">lincoln.ac.uk</span>). However, the resource identifier is easily altered by changing the configuration of a web server. This toolkit therefore focusses on the resource identifier part of the URI, with the exception of the <a href="http://lncn.eu/toolkit/domains">Domains</a> section.</p>
		
	<h2>Best Practises</h2>
	
	<p>
		Developing a website, small or large, isn't a small undertaking. Below are a number of best practises to bear in mind when it comes to developing the URI structure.
	</p>
	
	<div class="margin_top">
		
		<div class="accordion_me">
		
			<h3><a href="#persistent">Persistent and Permanent</a></h3>
			<div id="persistent">
				<p>One of the most fundamental philosophies behind a URI is that it represents a data object on the Internet. The URI must be unique so that it is a one-to-one match - one URI per one data object.</p>

				<p>While this is always the goal, there are times at which it is very difficult or impossible to accomplish. Canonical URL tags were invented to help reduce the amount of duplicate content seen by a search engine. While not a final solution, canonical URLs are strongly recommended as large search engines like Google are now paying attention to them.</p>
				
				<p>URIs should also be permanent (i.e. choose the URI once and leave it at that). This speaks to good URI design before a site is launched, with the URIs being carefully planned. There will come a time when you do want to make improvements to your choices or otherwise must change URI structure. When this becomes a necessity, HTTP 301 moved permanently redirects should be set up. This tells browsers and search engines the new location of the content and will also preserve any Google PageRank (and other search engine rankings) that the old URI has accumulated.</p>
			</div>
			
			<h3><a href="#consistent">Consistent</a></h3>
			<div id="consistent">
				<p>URIs across a site must be consistent in format. Once you pick your URI structure, be consistent and follow it! Having good URI structure for part of the site means that you still have poor structure overall. In order for a user to trust that URIs work a certain way on a site, the format must be consistent. If you must switch structure (maybe you’re updating a poorly-designed site), use 301 redirects as previously mentioned.</p>
				
				<p>
					An example of poor consistency would be having undergraduate information located at <span class="uri">/undergraduate</span> and postgraduate information at <span class="uri">/study/postgraduate</span>.
				</p>
				
				<p>
					Consistent structure = maintainable websites.
				</p>
			</div>
			
			
			
			<h3><a href="#readability">Readability</a></h3>
			<div id="readability">
			
				<p>A URI can simply be used as a 'click to' point on the internet. There’s nothing stopping an HEI putting a page on courses in the School of Computing at <span class="cleanuri">http://example.ac.uk/bcwi83b</span>. You plug it into a link, people click the link and off you go. Technically this is sound, but only in the same sense that you can technically address a letter to something like "10, SW1A 2AA". Yes it’s compact and yes it works, but it conveys absolutely nothing in terms of context. It’s also a real pain to remember, and requires you to use additional bits of your brain if you’re ever writing it down for later reference or typing it into a browser address bar.
				</p>

				<p>Imagine for a second that a prospectus had the following:</p>

    			<blockquote>Find out more about Computing at <span class="cleanuri">http://example.ac.uk/bcwi83b</span></blockquote>

				<p>And then compare it with a ‘human’ address:</p>

   				<blockquote>Find out more about Computing at <span class="cleanuri">http://example.ac.uk/school/computing</span></blockquote>

				<p>Now, try to remember the first one without looking at it. In short, URIs should describe your content (but in a short and succinct manner).</p>
				
				<p>Whatever method you use to create your website, it must be able to generate human readable URIs. Increasingly web browsers are allowing people to <a href="http://linkingyou.blogs.lincoln.ac.uk/2011/04/18/the-evolution-of-the-address-bar/">search through their history</a> based on URI fragments, meaning that while a URI such as <span class="uri">/computing</span> will be easily found, <span class="uri">/_depts/cs</span> won’t be. Even worse would be the style of URI which is often created by an incorrectly configured CMS, such as <span class="uri">ac.uk/content/027463</span>.</p>
							
			</div>
			
			<h3><a href="#short">Remove unnecessary keywords</a></h3>
			<div id="short">
				<p>
					Following on from the above point about readability, it is possible to take clean URIs too far by including unnecessary information in the URI.
				</p>
				
				<p>
					For example, an about page with the URI <span class="uri">/about_the_university</span> whilst accurate and readable, could and should be shortened to <span class="uri">/about</span> because it doesn't lose any of it's meaning but still describes the content well.
				</p>
				
				<p>
					Watch out for content management systems generating URIs based on page titles. A URI should be made up of keywords, but only the absolute minimum number of keywords in order to describe the content.
				</p>
			</div>
			
			<h3><a href="#querystring">Query strings should be for filtering and pagination only</a></h3>
			<div id="querystring">
				<p>
					"Dynamic" URIs, i.e. URIs containing query string arguments such as <span class="uri">/content/page.php?id=1234&output=1</span> should be kept to an absolute minimum, and even then should only be used (if necessary) for filtering content and paginating. 
				</p>
				
				<p>
					Dynamic URIs are less readable to both humans and search engines and therefore could be seen as less trustworthy because they don't necessarily describe the content to the user.
				</p>
				
				<p>
					If you need to use query strings then try and ensure they are descriptive:
				</p>
				
				<p>
					e.g. <span class="uri">/undergraduate/courses?years=2</span> or <span class="uri">/events?page=2</span>
				</p>
			</div>
			
			<h3><a href="#hashbang">Hashbangs are bad, pushState is good</a></h3>
			<div id="hashbang">
			
				<p>A number of websites, including Twitter and Gawker Media (Lifehacker, Gizmodo, etc) have recently re-architected their websites to make use of hashbang URIs &mdash; e.g. https://twitter.com/#!/unilincoln. <a href="http://code.google.com/web/ajaxcrawling/docs/getting-started.html">The hashbang was recommended by Google</a> as a way for search engines to crawl AJAX powered websites.</p>
				
				<p>There are a number of problems with hashbangs:</p>
				
				<ul>
					<li>In order to decide which content to render based on a hashbang URI, a hashbang enabled website relies on a user having a modern JavaScript enabled web browser.</li>
					<li>Hashbangs are invisible to the server, so if someone visits <span class="cleanuri">http://example.ac.uk/#!/badurl</span> (which triggers a 404), the error will not appear in your server logs.</li>
					<li>Hashbangs are forever, so if you go hashbang you can't go back. You can control the links on your website, however you can't control other people's links to your website. If people start linking to your hashbanged URIs then you're going to have to support the parsing of hashbangs even if you implement "fixed" URIs again.</li>
				</ul>
				
				<p>
					If you want to be all modern and exciting you should make use of the new <a href="https://developer.mozilla.org/en/DOM/Manipulating_the_browser_history">pushState</a> JavaScript features being introduced in the latest versions of browsers.
				</p>
				
				<p>
					For example, if you you want to move from  <span class="cleanuri">http://example.ac.uk/undergraduate</span> to  <span class="cleanuri">http://example.com/undergraduate/courses</span> you'd provide a link, which when clicked, would AJAX load in the content from the other page and update the URI in the navigation bar, or for a user with an older browser it would just load the other page as normal.
				</p>
							
			</div>
			
			<h3><a href="#subdomains">Limit the number of subdomains</a></h3>
			<div id="subdomains">
				<p>
					There may occasionally be a valid reason that content is on a different subdomain compared to the rest of the content, and with appropriate linking between the two should be okay. However if you split all your content subjects across lots of subdomains e.g. home.example.ac.uk (as opposed to example.ac.uk/home) and there aren't all of the correct 301 redirects in place then users will get confused and frustrated, and search engines will just give up on your site.
				</p>
				
				<p>
					There is a very well known principle called KISS (Keep It Short and Simple) that is very appropriate in this situation.
				</p>
			</div>
			
		</div>
		
	</div>

	<h2 class="margin_top">Discuss This</h2>
	
	<div id="disqus_thread"></div>
	<script type="text/javascript">
	    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	    var disqus_shortname = 'lncneukit'; // required: replace example with your forum shortname
	
	    // The following are highly recommended additional parameters. Remove the slashes in front to use.
	    var disqus_identifier = 'uri101';
	    var disqus_url = 'http://lncn.eu/toolkit/101';
	
	    /* * * DON'T EDIT BELOW THIS LINE * * */
	    (function() {
	        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
	        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	    })();
	</script>
	<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	<a href="http://disqus.com" class="dsq-brlink">Comments powered by <span class="logo-disqus">Disqus</span></a>
	
</article> 

<aside class="grid_4 last"> 


	<div class="box bg_light"> 
	
		<h2>What is a "Cool URI"?</h2> 
		
		<p>This toolkit is recommending something called "Cool URIs". This is an important part of creating understandable, reusable and memorable addresses.</p>
		
		<p>A cool URI is one which is entirely human readable, and stripped of as much 'technical' information as possible. Where an 'uncool' URI might be something like <span class="uri">/_course/J933.aspx</span> a 'cool' URI would be <span class="uri">/course/audioproduction</span>. Although the length may be similar, the cool URI is much more readable and helps to orient the user in your web space.</p>
		
		<p>Uncool URIs are commonly found on sites using legacy or badly configured CMS systems, where a page may be represented by a seemingly random identifier such as <span class="uri">/index.asp?content=64927</span>. There are many technical methods for dealing with uncool URIs and transitioning to the recommended cool alternatives. Linking You recommends the use of HTTP 3xx status codes &mdash; such as HTTP 301 Moved Permanently &mdash; as these deal seamlessly with users using the old URI, as well as keeping search engine rankings mostly unaffected.</p>
		
	
	</div> 

	<div class="box bg_light"> 
	
		<h2>Why not "URL"?</h2> 
		
		<p>You may be more familiar with referring to URIs as URLs. This isn't (for the most part) wrong and the distinction is mostly academic, but the generally accepted term in technical publications by Internet standards bodies is to use "URI".</p>
		
		<p>For a more in-depth look at why we're using URI instead of URL we recommend taking a look at <a href="http://tools.ietf.org/html/rfc3305">RFC 3305</a>, a document jointly published by the W3C and IETF standards groups.</p>
	</div>

	<div class="box bg_light">

		<h2>Key documents</h2>

		<p><a href="http://tools.ietf.org/html/rfc2616">Hypertext Transfer Protocol -- HTTP/1.1</a></p>
		<p><a href="http://www.w3.org/TR/cooluris/">Cool URIs for the Semantic Web</a></p> 
		<p><a href="http://www.w3.org/Provider/Style/URI">Cool URIs don't change</a></p>		
		<p><a href="http://tools.ietf.org/html/rfc3986">Uniform Resource Identifier (URI): Generic Syntax</a></p>		
		<p><a href="http://www.w3.org/2001/tag/doc/selfDescribingDocuments-2008-12-03.html">The Self-Describing Web</a></p> 
		<p><a href="http://www.w3.org/TR/webarch/">Architecture of the World Wide Web, Volume One</a></p> 
		  
	</div>

</aside>
