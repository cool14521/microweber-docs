<h2>get_cart</h2>
<p>
get_cart - gets the user shopping cart
<p>
 <pre class="prettyprint"><code class="language-php"> 
$cart_items = get_cart();
 </code></pre>
 
 
 
 
 
 

<h3>Parameters and fields</h3>
<p>You can pass parameters as string or as array.</p>
 
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>parameter</th>
			<th>optional values</th>
			<th>description</th>
			
		</tr>
	</thead>
	<tbody>
		
		<!--<tr>
			<td>session_id</td>
			<td><code>get_cart("session_id=".session_id());</code></td>
			<td>Set id of user session. If you are not admin it wont work.</td>
		</tr>
-->
		<tr>
			<td>order_completed</td>
			<td><code>get_cart("order_completed=any");</code></td>
			<td>Default is "n". Values are: "any", "y", "n"</td>
		</tr>


		<tr>
			<td>order_id</td>
			<td><code>get_cart("order_completed=y&order_id=5");</code></td>
			<td>If set it will return the cart for order id</td>
		</tr>
		 
		 
	</tbody>
</table>
 


<h4>See also</h4>
<?php print page_content('functions/_nav/shop'); ?>








 