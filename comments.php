                    <!-- Comments -->
                    <?php 
                    $args = array(
                        'walker'            => null,
                        'max_depth'         => '',
                        'style'             => 'ul',
                        'callback'          => null,
                        'end-callback'      => null,
                        'type'              => 'all',
                        'page'              => '',
                        'per_page'          => '',
                        'avatar_size'       => 32,
                        'reverse_top_level' => null,
                        'reverse_children'  => '',
                        'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
                        'short_ping'        => false,   // @since 3.6
                        'echo'              => true     // boolean, default is true
                    );
                    ?>
                    <?php wp_list_comments($args, $comments); 
                    $comments_args = array(
                        'label_submit'=>'Send',
                        'title_reply'
                    );
                    ?>
                    <div class="mt-5">
                        <h6 class="mb-4">Comments</h6>
                        <!-- Comment entry -->
                        <div class="media media-comment">
                            <img alt="Image placeholder" class="rounded-circle shadow mr-4" src="<?php echo get_theme_file_uri('/src/assets/img/theme/light/person-3.jpg'); ?>" style="width: 58px;">
                            <div class="media-body">
                                <div class="media-comment-bubble left-top">
                                    <h6 class="mt-0">Alexis Ren</h6>
                                    <p class="text-sm lh-160">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                    <div class="icon-actions">
                                        <a href="#" class="love active">
                                            <i data-feather="heart"></i>
                                            <span class="text-muted">10 likes</span>
                                        </a>
                                        <a href="#">
                                            <i data-feather="message-circle"></i>
                                            <span class="text-muted">1 reply</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media media-comment">
                            <img alt="Image placeholder" class="rounded-circle shadow mr-4" src="<?php echo get_theme_file_uri('/src/assets/img/theme/light/person-4.jpg'); ?>" style="width: 58px;">
                            <div class="media-body">
                                <div class="media-comment-bubble left-top">
                                    <h6 class="mt-0">Tom Cruise</h6>
                                    <p class="text-sm lh-160">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                    <div class="icon-actions">
                                        <a href="#" class="love active">
                                            <i data-feather="heart"></i>
                                            <span class="text-muted">20 likes</span>
                                        </a>
                                        <a href="#">
                                            <i data-feather="message-circle"></i>
                                            <span class="text-muted">3 replies</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media media-comment align-items-center">
                            <img alt="Image placeholder" class="rounded-circle shadow mr-4" src="<?php echo get_theme_file_uri('/src/assets/img/theme/light/person-1.jpg'); ?>" style="width: 58px;">
                            <div class="media-body">
                                <form class="rounded-lg border">
                                    <div class="input-group input-group-lg input-group-merge">
                                        <!-- Prepend -->
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border-0 pr-2">
                                                <i data-feather="edit-2"></i>
                                            </span>
                                        </div>
                                        <!-- Input -->
                                        <input type="text" class="form-control border-0 px-1" aria-label="Find something" placeholder="Write a comment...">
                                        <!-- Append -->
                                        <div class="input-group-append">
                                            <span class="input-group-text border-0 py-0 pl-2 pr-2">
                                                <button type="button" class="btn btn-sm btn-primary">Post</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>