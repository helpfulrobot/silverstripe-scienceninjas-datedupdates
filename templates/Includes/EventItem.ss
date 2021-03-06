<header>
	<h3><a href="$Link">$Title</a></h3>
</header>
<p class="metaInfo">
	<% if Category %>
		<a class="label label-inverse" href="$Category.Link">$Category.Title</a>
	<% end_if %>
	<time datetime="$Date">$Date.nice</time>
</p>

<% if EventDate %>
	<p class="event-date">$EventDate</p>
<% end_if %>
<% if EventLocation %>
	<p class="event-location">$EventLocation</p>
<% end_if %>

<% if Abstract %>
	<p>$Abstract</p>
<% else %>
	<p>$Content.LimitWordCount</p>
<% end_if %>
