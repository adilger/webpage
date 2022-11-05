<?php $this->assign('title', 'Call for Submissions');
 //-*- mode: c; c-basic-offset: 4; indent-tabs-mode: nil; -*-
 // * vim:expandtab:shiftwidth=4:tabstop=4:
 ?>

<div class="content">
    <h2>Call for Submissions</h2>

    <p class="call">
        Submissions are now open, see
        <?php echo $this->Html->link(__('"Call for Submissions - SC22'),
                [ 'controller' => 'pages', 'action' => 'display', 'cfs-sc22' ],
                [ 'class' => 'link' ]);
         ?>.
        The new ranked lists will be announced during
        <?php echo $this->Html->link(__('"The IO500 and the Virtual Institute of I/O" BoF'),
                [ 'controller' => 'pages', 'action' => 'display', 'bof-sc22' ],
                [ 'class' => 'link' ]);
         ?>.
        We hope to see many new results.
    </p>

    <p>
        The IO500 is <b>no longer</b> accepting submissions for the
        upcoming 11th semi-annual IO500 list in conjunction with SC'22.
        Submissions for the 10 Node Challenge are encouraged to share
        small scale storage system results.
    </p>

    <h3>Individual CFS Pages</h3>
    <p>
        Links to Older Call For Submissions Pages
    </p>

    <ul class="cfs-list">
        <li>
            <?php echo $this->Html->link("SC'22 CFS",
                [ 'controller' => 'pages', 'action' => 'display', 'cfs-sc22' ],
                [ 'class' => 'button' ]);
             ?>
        </li>
        <li>
            <?php echo $this->Html->link("ISC'22 CFS",
                [ 'controller' => 'pages', 'action' => 'display', 'cfs-isc22' ],
                [ 'class' => 'button' ]);
             ?>
        </li>
        <li>
            <?php echo $this->Html->link("SC'21 CFS",
                [ 'controller' => 'pages', 'action' => 'display', 'cfs-sc21' ],
                [ 'class' => 'button' ]);
             ?>
        </li>
        <li>
            <?php echo $this->Html->link("ISC'21 CFS",
                [ 'controller' => 'pages', 'action' => 'display', 'cfs-isc21' ],
                [ 'class' => 'button' ]);
             ?>
        </li>
    </ul>

    <div id="disqus_thread"></div>
</div>

<script>
var disqus_config = function () {
    this.page.url = "<?php echo $this->Url->build($this->request->getRequestTarget(), ['fullBase' => true]); ?>";
    this.page.identifier = "<?php echo $this->Url->build($this->request->getRequestTarget()); ?>";
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://io500.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
