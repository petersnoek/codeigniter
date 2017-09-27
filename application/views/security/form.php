<div id="sb-search" class="sb-search">
    <form method="post" action="">
        <input class="sb-search-input" placeholder="Enter your search term..." type="search" value="" name="search" id="search">
        <button class="sb-search-submit" type="submit" value="">
        <span class="sb-icon-search"></span>
    </form>
</div>


<div>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
        </tr>

        <?php foreach($news as $new) { ?>
            <tr>
                <td><?php echo $new['id']; ?></td>
                <td><?php echo $new['title']; ?></td>
            </tr>
        <?php } ?>


    </table>

</div>