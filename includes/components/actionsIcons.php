        <a href="javascript:void(0)"
            onclick="if(confirm('Are You sure to delete this record?')){document.querySelector('#delete-task-<?php echo $row['id'] ?>').submit();} else {return false}"
            class="mx-2 text-danger" id="delete-btn">
                <i class="fa-solid fa-trash"></i>
        </a>
        <a href="update.php?id=<?php echo $row["id"]?>" class="mx-2 text-success">
            <i class="fa-solid fa-pen-to-square"></i>
        </a>
        
    <form action="includes/scripts.php" method="post" class="d-none" id="delete-task-<?php echo $row['id'] ?>" >
        <input type="hidden" name="delete" value="<?php echo $row['id'] ?>" >
    </form>