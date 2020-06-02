                       <!-- Modal EditSubModal -->
                       <div class="modal fade" id="editSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="editSubMenuModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="newMenuModalLabel">Edit SUbMenu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?=base_url()?>menu/editsubmenu" method="post">
                                <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Submenut Title">
                                </div>
                                <div class="form-group">
                                    <select name="menu_id" id="menu_id" class="form-control">
                                        <option value="">Select Menu</option>
                                        <?php foreach($menu as $m):?>
                                            <option value="<?=$m['id']?>"><?=$m['menu']?></option>
                                        <?php endforeach;?>
                                    </select>
                                    </div>

                                    <div class="form-group">
                                    <input type="text" class="form-control" id="url" name="url" placeholder="Submenu Url">
                                    </div>

                                    <div class="form-group">
                                    <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                                    </div>

                                    <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="1" name="is_active" id="is_active" checked>
                                        <label class="form-check-label" for="is_active">Active</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add Menu</button>
                                </div>
                                </form>
                                </div>
                            </div>
                            </div>
                        <!-- end EditSubMenu Modal -->