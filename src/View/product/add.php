<div class="col-12 col-md-12 mt2">
    <div class="card">
        <div class="card-header">
            Add product
        </div>
        <div class="card-body">
            <div class="col-12">
                <form action="" method='post' enctype='multipart/form-data'>
                    <div class="mb-3">
                        <label for="">Product Name</label>
                        <input type="text" name='proName'>
                    </div>
                    <div class="col-12">
                        <label for="">Product price</label>
                        <input type="text" name='price'>
                    </div>
                    <div class="col-12">
                        <label for="">Product status</label>
                        <select name="status" id="">
                            <option value="In stock">In Stock</option>
                            <option value="Out of stock">Out Of Stock</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="">Img</label>
                        <input type="file" name="img">
                    </div>
                    <div class="col-12">
                        <label for="">Category</label>
                        <select name="cateName" id="">
                            <option value="1">Cardfight Vanguard</option>
                            <option value="2">Yu-Gi-Oh</option>
                            <option value="3">Battle Spirits</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="">Supplier</label>
                        <select name="supName" id="">
                            <option value="1">Bandai</option>
                            <option value="2">Konami</option>
                            <option value="3">Bushiroad</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="index.php?page=product&action=showList" class='btn btn-secondary'>Back</a>
                </form>
            </div>
        </div>
    </div>
</div>