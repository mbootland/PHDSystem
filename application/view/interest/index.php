<div class="container">
<link rel="stylesheet" type="text/css" href="style.css">

<div class="box">
<form action="<?php echo URL; ?>interest/getAllInterests" method="POST">
  <input type="text" name="searchInterest" size="30" value="" />
<input type="submit" name="submit" value="Send" />
</form>
</div>


<div class="box">
    <table>
        <thead style="background-color: #ddd; font-weight: bold;">
        <tr>
            <td>Submission ID</td>
            <td>Supervisor ID</td>

        </tr>
                </thead>
        <tbody>
        <?php foreach ($interests as $interest)  { ?>
    <tr>
        <td><?php if (isset($interest->submissionID)) echo htmlspecialchars($interest->submissionID, ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php if (isset($interest->supervisorID)) echo htmlspecialchars($interest->supervisorID, ENT_QUOTES, 'UTF-8'); ?></td>

        <td>
       <?php if (isset($interest->link)) { ?>
           <a href="<?php echo htmlspecialchars($interest->link, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($interest->link, ENT_QUOTES, 'UTF-8'); ?></a>
       <?php } ?>
   </td>
    </tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</html>
