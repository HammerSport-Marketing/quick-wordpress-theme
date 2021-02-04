<?php $unique_id = esc_attr( uniqid('search-form-')); ?>

                    <form role="search" method="get" class="rounded-lg border search-form"
                    action="<?php echo esc_url( home_url('/'));?>">
                        <div class="input-group input-group-merge">
                            <!-- Prepend -->
                            <div class="input-group-prepend">
                                <span class="input-group-text border-0 pr-2">
                                    <i data-feather="search"></i>
                                </span>
                            </div>
                            <!-- Input -->
                            <input type="search" class="form-control border-0 px-1" name="s" value="<?php the_search_query();?>" aria-label="Find something" placeholder="Find something...">
                            <!-- Append -->
                            <div class="input-group-append">
                                <span class="input-group-text border-0 py-0 pl-2 pr-1">
                                    <button type="submit" class="btn btn-sm btn-primary">Search</button>
                                </span>
                            </div>
                        </div>
                    </form>