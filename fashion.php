<?php include("funkcije.php") ?>
<div id="podstranice">
	<h3>Fashion</h3>
	<div class="novost">
		<p>26.03.2015. 21:23:12</p>
		<p>Emina Muharemovic</p>
		<h4>THE 10 MOST VALUABLE LUXURY BRAND IN THE WORLD</h4>
		<TABLE>
			<CAPTION></CAPTION>
			<tr><th>Rank</th>
			<th>Brand Name</th>
			<th>Brand Value $M</th>
			<th>Brand Contribution</th>
			<th>Brand Momentum</th>
			<th>Brand Value % Change</th></tr>
			<tr><td>1</td><td>Louis Vuitton</td><td>25,873</td><td>4</td><td>8</td><td>14%</td></tr>
			<tr><td>2</td><td>Hermes</td><td>21,844</td><td>5</td><td>8</td><td>14%</td></tr>
			<tr><td>3</td><td>Gucci</td><td>16,131</td><td>5</td><td>10</td><td>27%</td></tr>
			<tr><td>4</td><td>Prada</td><td>9,985</td><td>4</td><td>9</td><td>6%</td></tr>
			<tr><td>5</td><td>Rolex</td><td>9,083</td><td>4</td><td>7</td><td>14%</td></tr>
			<tr><td>6</td><td>Cartier</td><td>8,941</td><td>4</td><td>9</td><td>40%</td></tr>
			<tr><td>7</td><td>Chanel</td><td>7,810</td><td>5</td><td>9</td><td>10%</td></tr>
			<tr><td>8</td><td>Burberry</td><td>5,940</td><td>5</td><td>8</td><td>42%</td></tr>
			<tr><td>9</td><td>Coach</td><td>3,129</td><td>2</td><td>8</td><td>-4%</td></tr>
			<tr><td>10</td><td>Fendi</td><td>3,023</td><td>4</td><td>10</td><td>-17%</td></tr>
		</TABLE>
	</div>
	<div class="novost">
		<?php foreach(procitajSveNovosti("fashion") as $novost) { ?>
					<?php include("novost.php") ?>	
				<?php } ?>
	</div>
	
</div>
