<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>

<a href="/cakephp-2.3.1/posts/index">Back to the list</a>
<!-- <a href="/posts/index">Back to the list</a> -->