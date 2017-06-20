
<h3>List Student</h3>
<a href="index.php?action=form" style='padding: 3px 10px; border: 1px solid #ccc; background: #f3f3f3; '>Add Student</a>

<table border="1" style='margin-top: 15px;'>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Comment</th>
    </tr>
    <?php foreach ($users as $user) :?>
        <tr>
            <td><?=$user->getId();?></td>
            <td><?=$user->getName();?></td>
            <td><?=$user->getEmail();?></td>
            <td><?=$user->getComment()?></td>
        </tr>
    <?php endforeach;?>
</table>