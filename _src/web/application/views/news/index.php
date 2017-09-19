<h2><?php echo $title; ?></h2>

<div>
    <a href="<?php echo site_url('news/create'); ?>">Create article</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>title</th>
            <th>text</th>
            <th>link</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($news as $news_item): ?>
        <tr>
            <td><?php echo $news_item['title']; ?></td>
            <td><?php echo $news_item['text']; ?></td>
            <td><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></td>
        </td>
    <?php endforeach; ?>
    </tbody>
</table>


