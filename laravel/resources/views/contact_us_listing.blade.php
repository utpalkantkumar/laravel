


@include('includes.header')

  



    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="text-center">Contact us Listing</h2>
			<hr class="star-primary">
				@if (session('status'))
					<div class="alert alert-success">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('status') }}
					</div>
				@endif
            <div class="row">
			
			
			
                <div class="col-lg-8 offset-lg-2">
                   
				   
				    <div class="table-responsive">
                             <table class="table table-hover" id="siteList">
								  <thead>
									<tr>
									  <th style="background-color:#2196F3; color:white;" data-column-id="First Name" >First Name</th>
									  <th style="background-color:#2196F3; color:white;" data-column-id="Last name">Last Name</th>
									  <th style="background-color:#2196F3; color:white;" data-column-id="Email-Id" >Email-Id</th>
									  <th style="background-color:#2196F3; color:white;" data-column-id="Phone number link" >Phone number</th>
									  <th style="background-color:#2196F3; color:white;" data-column-id="Created Time" >Created Time</th>
									</tr>
								 </thead>
								  <tbody>
								  @foreach($data as $dataVal)
								<tr>
                                  <td>{{$dataVal->f_name}}</td>
                                  <td>{{$dataVal->l_name}}</td>
                                  <td>{{$dataVal->phone}}</td>
                                  <td>{{$dataVal->email}}</td>
                                  <td>{{$dataVal->created_at}}</td>
								</tr>
								@endforeach
						         </tbody>
                            </table>
                        </div>
				   
				   
				   
                </div>
				
				
            </div>
        </div>
    </section>




@include('includes.footer')