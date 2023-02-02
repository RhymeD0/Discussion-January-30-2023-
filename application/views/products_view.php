    <header style="text-align: center;">
        <h1>Aling Susan's Sisigan Menu</h1>
    </header>
    
    <section class="col col-md-10" style="margin: auto">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stocks</th>
                    <th scope="col">Date Added</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $product): ?>
                    <tr>
                        <td><?= $product['prod_id']; ?></th></td>
                        <td><?= $product['prod_name']; ?></td>
                        <td><?= $product['prod_description']; ?></td>
                        <td><?= $product['prod_price']; ?></td>
                        <td><?= $product['prod_stocks']; ?></td>
                        <td><?= $product['prod_datecreated']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>