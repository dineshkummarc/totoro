<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<rss version="2.0">
    <channel>
      <title><?php echo $config['blog_title'] ?></title>
      <description><?php echo $config['blog_description'] ?></description>
      <lastBuildDate><?php echo date("D, d M Y H:i:s") ?></lastBuildDate>
      <link><?php echo $config['base_url'] ?></link>
        <?php foreach($posts as $post): ?> 
        <item>
          <title><?php echo $post['title'] ?></title>
          <description><?php echo '<![CDATA['. excerpt($post['content']) .']]>'; ?></description>
          <pubDate><?php echo date("D, d M Y H:i:s", strtotime($post['year'].'-'.$post['month'].'-'.$post['day'])) ?></pubDate>
          <link><?php echo post_url($post) ?></link>
        </item>
        <?php endforeach ?> 
    </channel>
</rss>

