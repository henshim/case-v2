<div class='col-12 col-md-12 mt-2'>
    <div class='card'>
        <div class='card-header'>
            <a href="index.php?page=product" style='text-decoration: none'>Product list</a>
        </div>
        <div class='card-body'>
            <div class='col-12'>
                <a href="index.php?page=product&action=add">Add Product</a>

                <table class='table table-border'>
                    <thead>
                    <tr>
                        <th>Stt</th>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product status</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Supplier</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $key => $product): ?>
                        <tr>
                            <td><?php echo ++$key ?></td>
                            <td><a href="index.php?page=product&id=<?php echo $product->id ?>">
                                    <?php echo 'CS-' . $product->id ?></a>
                            </td>
                            <td><?php echo $product->proName ?></td>
                            <td><?php echo $product->price ?></td>
                            <td><?php echo $product->status ?></td>
                            <td><img src="<?php echo $product->img ?>" style='width:100px; height:120px ' alt="thieu anh"></td>
                            <td><?php echo $product->cateName ?></td>
                            <td><?php echo $product->supName ?></td>
                            <td><?php echo $product->description ?></td>
                            <td>
                                <a href="./index.php?page=product&action=edit&id=<?php echo $product->id ?>"
                                   class='btn btn-primary btn-sm'>Update</a>
                                <a href="./index.php?page=product&action=del&id=<?php echo $product->id ?>"
                                   class='btn btn-danger btn-sm' onclick="return confirm('Are you sure about that???')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>