<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Update Product Info
        </div>

        <div class="card-body">
            <div class="col-12">
                <form method="post" enctype="multipart/form-data"
                      action="./index.php?page=product&action=edit&id=<?php echo $product->id ?>">
                    <input type="hidden" value="<?php echo $product->id ?>" name="id">
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="proName" value="<?php echo $product->proName ?>" class="form-control">
                        <?php if (isset($errors->proName)): ?>
                            <p class="text-danger"><?php echo $errors->proName ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price</label>
                        <input type="text" name="price" value="<?php echo $product->price ?>">
                        <?php if (isset($errors->price)): ?>
                            <p class="text-danger"><?php echo $errors->price ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Status</label>
                        <select name="status" id="">
                            <option value="<?php echo $product->status ?>"></option>
                            <option value="In Stock">In stock</option>
                            <option value="Out Of Stock">Out of stock</option>
                        </select>
                        <?php if (isset($errors->status)): ?>
                            <p class="text-danger"><?php echo $errors->status ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="img">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="cateName" id="">
                            <option value="<?php echo $product->cateName ?>"></option>
                            <option value="1">Cardfight Vanguard</option>
                            <option value="2">Yu-Gi-Oh</option>
                            <option value="3">Battle Spirits</option>
                        </select>
                        <?php if (isset($errors->cateName)): ?>
                            <p class="text-danger"><?php echo $errors->cateName ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Supplier</label>
                        <select name="supName" id="">
                            <option value="<?php echo $product->supName ?>"></option>
                            <option value="1">Bandai</option>
                            <option value="2">Konami</option>
                            <option value="3">Bushiroad</option>
                        </select>
                        <?php if (isset($errors->supName)): ?>
                            <p class="text-danger"><?php echo $errors->supName ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" id="" cols="30"
                                  rows="10"><?php echo $product->description ?></textarea>
                        <?php if (isset($errors->description)): ?>
                            <p class="text-danger"><?php echo $errors->description ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="index.php?page=product&action=list" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div><?php
