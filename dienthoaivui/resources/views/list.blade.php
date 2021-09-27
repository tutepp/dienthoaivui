<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản lý Sản phẩm</title>
    <script src = "cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"></script>
    <script src ="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src= "//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="./assets/js/init-alpine.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script>
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
      <!-- Desktop sidebar -->
      <aside
        class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#"
          >
            Dienthoaivui
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <span
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="index.html"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  ></path>
                </svg>
                <span class="ml-4">Quản lý Sản phẩm</span>
              </a>
            </li>
          </ul>

        </div>
      </aside>
      <!-- Mobile sidebar -->
      <!-- Backdrop -->

      <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
          <div
            class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
          >
            <!-- Mobile hamburger -->
            <button
              class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
              @click="toggleSideMenu"
              aria-label="Menu"
            >
              <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
            <!-- Search input -->
            <div class="flex justify-center flex-1 lg:mr-32">
              <div
                class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
              >
                <div class="absolute inset-y-0 flex items-center pl-2">
                  <svg
                    class="w-4 h-4"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <input
                  class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                  type="text"
                  placeholder="Search for projects"
                  aria-label="Search"
                />
              </div>
            </div>
            <a href="http://127.0.0.1:8000/home" style="margin-left: 50px;"><i class="fa fa-user"></i>Home</a>

          </div>
        </header>
        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
            Quản lý Sản phẩm
            </h2>
            <!-- CTA -->
            <a
              class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
            >
              <div class="flex items-center">
                <svg
                  class="w-5 h-5 mr-2"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                  ></path>
                </svg>
                <span>Hệ thống quản lý Dienthoaivui</span>
              </div>
              <span></span>
            </a>
            <!-- Cards -->
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
              <!-- Card -->

            </div>
            <div>
            <!-- Modal edit -->
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalProduct" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit sản phẩn</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form id="form-edit" >
                    @csrf
                        <div class="form-group mb-2">
                            <label name="name" >Tên sản phẩm</label>
                            <input type="text" class="form-control" placeholder="Tên sản phẩm" id ="product_name_edit" >
                        </div>
                        <div class="form-group mb-2">
                            <label name="price" >Giá sản phẩm</label>
                            <input type="number" class="form-control" placeholder="Giá sản phẩm" id ="product_price_edit">
                        </div>
                        <div class="mb-3" id="product_category">
                            <label for="message-text" class="col-form-label">Loại</label>
                            <select name="category_id" id="category_id_edit">
                                @foreach ($categories as $category)
                                    <option value={{ $category->id }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3" id="product_image">
                            <label for="message-text" class="col-form-label">Ảnh</label>
                            <input type="file" name="image" class="form-control" id="product_image_edit">
                        </div>
                        <div class="form-group mb-2">
                            <label mame="description" >Mô tả</label>
                            <input type="text" class="form-control" placeholder="Mô tả" id= "product_description_edit">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="button" onclick="update_product()" class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>




                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Thêm sản phẩm
                </button>


                <!-- Modal create-->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm mới sản phẩn</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="signup-form" id="form-add" data-url="{{route('products.store')}}" >
                    @csrf
                        <div class="form-group mb-2">
                            <label name="name" >Tên sản phẩm</label>
                            <input type="text" class="form-control" placeholder="Tên sản phẩm" id ="product_name">
                        </div>
                        <div class="form-group mb-2">
                            <label name="price" >Giá sản phẩm</label>
                            <input type="number" class="form-control" placeholder="Giá sản phẩm" id ="product_price">
                        </div>
                        <div class="mb-3" id="product_category">
                            <label for="message-text" class="col-form-label">Loại</label>
                            <select name="category_id" id="category_id">
                                @foreach ($categories as $category)
                                    <option value={{ $category->id }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3" id="product_image">
                            <label for="message-text" class="col-form-label">Ảnh</label>
                            <input type="file" name="image" class="form-control" id="image">
                        </div>
                        <div class="form-group mb-2">
                            <label mame="description" >Mô tả</label>
                            <input type="text" class="form-control" placeholder="Mô tả" id= "product_description">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="button" onclick="create_product('$product->id')" class="btn btn-primary">Lưu </button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            <!-- New Table -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">STT</th>
                      <th class="px-4 py-3">Name</th>
                      <th class="px-4 py-3">Price</th>
                      <th class="px-4 py-3">Image</th>
                      <th class="px-4 py-3">Category</th>
                      <th class="px-4 py-3">Description</th>
                      <th class="px-4 py-3">Action</th>
                    </tr>
                  </thead>

                  <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  @foreach ($products as $key => $product)
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3 text-sm">{{ ++$key }}</td>
                      <td class="px-4 py-3">{{ $product->name }}</td>
                      <td class="px-4 py-3 text-sm">{{ $product->price }}</td>
                      <td class="px-4 py-3 text-xs"><img src={{asset('storage').'/'.$product->image }} alt="image" style="width: 70px;height:100px;"></td>
                      <td class="px-4 py-3 text-sm">{{ $product->category->name }}</td>
                      <td class="px-4 py-3 text-sm">{{ $product->description }}</td>
                      <td class="px-4 py-3 text-sm">
                        <button onclick="show_product()" data-url="{{ route('products.getProductById',$product->id) }}" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Edit
                        </button>
                        <button onclick="delete_product()" type="button" data-url="{{ route('products.destroy',$product->id) }}"​ data-token="{{ csrf_token() }}"  class="px-3 py-1 text-sm    font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-md active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-black">
                            Delete
                        </button>

                      </td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
                <span class="flex items-center col-span-3">
                  Showing Page
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    <span>
                  {!! $products->links() !!}
                    </span>
                </span>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
        function create_product(){
            var url = 'http://127.0.0.1:8000/product';
            let formData = new FormData();
            formData.append('image', $('#image')[0].files[0]);
            formData.append('name', $('#product_name').val());
            formData.append('price', $('#product_price').val());
            formData.append('category_id', $('#category_id').val());
            formData.append('description', $('#product_description').val());
            console.log(formData.get('category_id'))
            $.ajax({
                type:'post',
                url:url,
                data:formData,
                contentType: false,
                processData: false,
            success: function(response){
                alert('Thêm sản phẩm thành công')
                $('#exampleModal').modal('hide');
                console.log(response.data)
                window.location.reload();
                },
                })
        }
        function show_product(){
            var url = event.target.getAttribute("data-url");
            console.log(url)
					$.ajax({
						type: 'get',
						url: url,
                        success: function(response){
                        console.log(response.data.name)
                        $('#product_name_edit').val(response.data.name)
                        $('#product_price_edit').val(response.data.price)
                        $('#product_category_id_edit').val(response.data.category_id)
                        $('#product_description_edit').val(response.data.description)
                            console.log(response.data.id)
                        $('#form-edit').attr('data-url',response.data.id)
                        $('#editModal').modal("show");

                        }
					})
				}
            function update_product(){
            var id = $('#form-edit').attr('data-url');
            console.log(id)
            var url = 'http://127.0.0.1:8000/product_update/'+ id;
            console.log(url);
            // let formData = new FormData();
            // formData.append('image', $('#product_image_edit')[0].files[0]);
            // formData.append('name', $('#product_name_edit').val());
            // formData.append('price', $('#product_price_edit').val());
            // formData.append('category_id', $('#category_id_edit').val());
            // formData.append('description', $('#product_description_edit').val());
            // console.log(formData.append('image', $('#product_image_edit')[0].files[0]))
            $.ajax({
                type:'put',
                url:url,
                data:{
                name: $('#product_name_edit').val(),
                price:$('#product_price_edit').val(),
                image:$('#product_image_edit')[0].files[0],
                category_id:$('#category_id_edit').val(),
                description:$('#product_description_edit').val()
                },

            success: function(response){
                console.log(response
                )
                alert('Sửa thành công')
                $('#exampleModal').modal('hide');
                console.log(response.data)
                window.location.reload();
                },
                })
        }

        function delete_product(){
            var url = event.target.getAttribute("data-url");
            console.log(url)
				if (confirm('Ban co chac muon xoa khong?')) {
				$.ajax({
				type: 'delete',
				url: url,
				success: function(response) {
					alert('Delete  success!')
					window.location.reload();
				    },
                })
			}
		}

    </script>
  </body>
</html>
