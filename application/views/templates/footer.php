
</div>

<p class="footer">
    <span class="codeblock">query: <?php echo (isset($_SESSION['query'])?$_SESSION['query']:"");?></span>
    Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?><br>
    <span class="codeblock"><?php if(isset($_SESSION)) { var_dump($_SESSION); } ?></span>
</p>
</div>

</body>
</html>