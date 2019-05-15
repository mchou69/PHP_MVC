
<h1><?= $title?></h1>
<div>

    <div class="table-responsive">
        <table class="table table-sm table-dark">
            <caption>Posts</caption>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($data as $post)
                    echo '<tr><th scope="row">'.$post['id'].'</th><td>'.$post['title'].'</td><td>'.$post['created'].'</td><td><a href="#"><i class="fa fa-times"></i></a>&nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-check"></i></a></td></tr>';
            ?>
            </tbody>
        </table>
    </div>
</div>
