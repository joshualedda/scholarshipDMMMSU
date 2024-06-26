<main id="main" class="main">

	<div class="pagetitle">
		<h1>User List</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="">Dashboard</a></li>
				<li class="breadcrumb-item">Users</li>
			</ol>
		</nav>
	</div>


	<div class="d-flex justify-content-end my-2">
		<a href="<?= base_url('admin/users/create') ?>" class="btn btn-primary mx-2">Add</a>
	</div>


	<section class="section">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">


						<h5 class="card-title">Users Data</h5>

						<div class="table-responsive">

							<table class="table datatable table-striped table-hover" id="filteredStudentTable">
								<thead>
									<tr>

										<th>Name</th>
										<th>Username</th>
										<th>Email</th>
										<th>User Type</th>
										<th>Campus</th>
										<th>Manage</th>
									</tr>
								</thead>

								<tbody>
									<?php foreach ($users as $user): ?>
									<tr>
										<td><?= htmlspecialchars($user['nameUser'] ?? '') ?></td>
										<td><?= htmlspecialchars($user['username'] ?? '') ?></td>
										<td><?= htmlspecialchars($user['email'] ?? '') ?></td>
										<td><?= htmlspecialchars($user['userTypeName'] ?? '') ?></td>
										<td><?= htmlspecialchars($user['campusName'] ?? 'All Campus') ?></td>
										<td>
											<a href="<?= base_url('admin/users/view/' . $user['userId']) ?>"
												class="btn-primary btn btn-sm text-dark">View</a>
											<a href="<?= base_url('admin/users/edit/' . $user['userId']) ?>"
												class="btn-warning btn btn-sm text-dark">Edit</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>



							</table>
						</div>


					</div>
				</div>
			</div>
		</div>
	</section>
</main>
