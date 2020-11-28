<?php
require_once ("oo_bll.inc.php");

function renderGameRow(BLLGame $pp)
{
    $trow = <<<PROW
    		<tr>
    		    <td>{$pp->gameTitle}</td>
				<td>{$pp->developer}</td>
				<td>{$pp->ageCert}</td>
				<td>{$pp->desc}</td>
				<td>{$pp->releaseDate}</td>
				<td>{$pp->genre}</td>
				<td>£{$pp->retailPrice}</td>
				<td>{$pp->rank}</td>
				<td>{$pp->recommendScore}</td>
				<td>{$pp->userScore}</td>
			</tr>
PROW;
    return $trow;
}

function rendergGameTable(BLLgameSet $pgames)
{
    $trowdata = "";
    foreach ($pgames->gamelist as $tp)
    {
        $trowdata .= renderGameRow($tp);
    }

    $ttable = <<<TABLE
    <div class="table-responsive">
<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Title</th>
							<th>Developer</th>
							<th>Age Rating</th>
							<th>Description</th>
							<th>Release Date</th>
							<th>Genre</th>
							<th>Retail Price</th>
							<th>Rank</th>
							<th>Recommedation Score</th>
							<th>Average User Score</th>
							
						</tr>
					</thead>
					<tbody>
					{$trowdata}
					</tbody>
</table>
					</div>
TABLE;
    return $ttable;
}

?>