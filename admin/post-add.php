<?php include __DIR__ . "/includes/header.php"; ?>
<?php include __DIR__ . "/includes/sidebar.php"; ?>

<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            Add Article
        </h1>
        <div class="row mt-4">

                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-body">
                                    <form action="php/code.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">

                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="mb-1" for="">Name</label>
                                                <input required type="text" name="name" class="form-control">
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label class="mb-1" for="">Slug (URL)</label>
                                                <input required type="text" name="slug" class="form-control">
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label class="mb-1" for="">Description</label>
                                                <textarea required id="summernote" name="description"  rows="10" class="form-control"></textarea>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <label class="mb-1" for="">Meta Title</label>
                                                <input type="text" name="meta_title" class="form-control">
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label class="mb-1" for="">Meta Description</label>
                                                <textarea name="meta_description" id="" rows="4" class="form-control"></textarea>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label class="mb-1" for="">Meta Keywords</label>
                                                <textarea name="meta_keyword" id="" rows="4" class="form-control"></textarea>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label class="mb-1" for="">Image</label>
                                                <input  type="file" name="image" class="form-control">
                                            </div>


                                            <div class="col-md-6 mb-3">
                                                <label class="mb-1" for="">Status</label>
                                                <input type="checkbox" name="status" width="70px"
                                                       height="70px">
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <button type="submit" name="post_add" class="btn btn-primary">Save post
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>


    </section>
</div>


<?php include __DIR__ . "/includes/footer.php"; ?>
