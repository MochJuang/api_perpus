<h1> API APLIKASI PERPUS SEDERHANA </h1>
	<h2 align="center">List Request</h2>
	<p></p>
	<h3>Data Kelas</h3>
	<table class="table" cellpadding="7" rules="rows">
		<thead>
			<tr>
				<th>Action</th>
				<th>URL</th>
				<th>Method</th>
				<th>Parameters</th>
				<th>Example URL</th>
				<th>Response</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Select All</td>
				<td>/kelas</td>
				<td>GET</td>
				<td>null</td>
				<td>/kelas</td>
				<td>json_data</td>
			</tr>
			<tr>
				<td>Select One</td>
				<td>/kelas/{id}</td>
				<td>GET</td>
				<td>id_kelas</td>
				<td>/kelas/2</td>
				<td>json_data</td>
			</tr>
			<tr>
				<td>Select Member Where Class</td>
				<td>/member/class/id}</td>
				<td>GET</td>
				<td>id_kelas</td>
				<td>/member/class/2</td>
				<td>json_data</td>
			</tr>
			<tr>
				<td>Delete</td>
				<td>/kelas/{id}</td>
				<td>DELETE</td>
				<td>id_kelas</td>
				<td>/kelas/2</td>
				<td>Bool (true/false)</td>
			</tr>
			<tr>
				<td>Edit</td>
				<td>/kelas/{id}</td>
				<td>POST</td>
				<td>id_kelas (url), kelas|wali_kelas ($_POST)</td>
				<td>/kelas</td>
				<td>Bool (true/false)</td>
			</tr>
			<tr>
				<td>Create</td>
				<td>/kelas</td>
				<td>POST</td>
				<td>kelas|wali_kelas ($_POST</td>
				<td>/kelas</td>
				<td>Bool (true/false)</td>
			</tr>
		</tbody>
	</table>
	<p></p>
	<h3>Data Member</h3>
	<table class="table" cellpadding="7" rules="rows">
		<thead>
			<tr>
				<th>Action</th>
				<th>URL</th>
				<th>Method</th>
				<th>Parameters</th>
				<th>Example URL</th>
				<th>Response</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Select All</td>
				<td>/member</td>
				<td>GET</td>
				<td>null</td>
				<td>/member</td>
				<td>json_data</td>
			</tr>
			<tr>
				<td>Select One</td>
				<td>/member/{id}</td>
				<td>GET</td>
				<td>id_member</td>
				<td>/member/2</td>
				<td>json_data</td>
			</tr>
			<tr>
				<td>Delete</td>
				<td>/member/{id}</td>
				<td>DELETE</td>
				<td>id_member</td>
				<td>/member/2</td>
				<td>Bool (true/false)</td>
			</tr>
			<tr>
				<td>Edit</td>
				<td>/member/{id}</td>
				<td>POST</td>
				<td>id_member (url), member|id_kelas ($_POST)</td>
				<td>/member</td>
				<td>Bool (true/false)</td>
			</tr>
			<tr>
				<td>Create</td>
				<td>/member</td>
				<td>POST</td>
				<td>member|id_kelas ($_POST</td>
				<td>/member</td>
				<td>Bool (true/false)</td>
			</tr>
		</tbody>
	</table>
	<p></p>
	<h3>Data Judul</h3>
	<table class="table" cellpadding="7" rules="rows">
		<thead>
			<tr>
				<th>Action</th>
				<th>URL</th>
				<th>Method</th>
				<th>Parameters</th>
				<th>Example URL</th>
				<th>Response</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Select All</td>
				<td>/judul</td>
				<td>GET</td>
				<td>null</td>
				<td>/judul</td>
				<td>json_data</td>
			</tr>
			<tr>
				<td>Select One</td>
				<td>/judul/{id}</td>
				<td>GET</td>
				<td>id_judul</td>
				<td>/judul/2</td>
				<td>json_data</td>
			</tr>
			<tr>
				<td>Delete</td>
				<td>/judul/{id}</td>
				<td>DELETE</td>
				<td>id_judul</td>
				<td>/judul/2</td>
				<td>Bool (true/false)</td>
			</tr>
			<tr>
				<td>Edit</td>
				<td>/judul/{id}</td>
				<td>POST</td>
				<td>id_judul (url), judul|pengarang ($_POST)</td>
				<td>/judul</td>
				<td>Bool (true/false)</td>
			</tr>
			<tr>
				<td>Create</td>
				<td>/judul</td>
				<td>POST</td>
				<td>judul|pengarang ($_POST)</td>
				<td>/judul</td>
				<td>Bool (true/false)</td>
			</tr>
		</tbody>
	</table>
	<h3>Data Book (Copy of Judul)</h3>
	<table class="table" cellpadding="7" rules="rows">
		<thead>
			<tr>
				<th>Action</th>
				<th>URL</th>
				<th>Method</th>
				<th>Parameters</th>
				<th>Example URL</th>
				<th>Response</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Select All</td>
				<td>/buku</td>
				<td>GET</td>
				<td>null</td>
				<td>/buku</td>
				<td>json_data</td>
			</tr>
			<tr>
				<td>Delete</td>
				<td>/buku/{id}</td>
				<td>DELETE</td>
				<td>id_buku</td>
				<td>/buku/2</td>
				<td>Bool (true/false)</td>
			</tr>
			<tr>
				<td>Create</td>
				<td>/buku/{id}</td>
				<td>POST</td>
				<td>id_judul</td>
				<td>/buku</td>
				<td>json_data (kode_buku)</td>
			</tr>
		</tbody>
	</table>
	<h3>Transaction</h3>
	<table class="table" cellpadding="7" rules="rows">
		<thead>
			<tr>
				<th>Action</th>
				<th>URL</th>
				<th>Method</th>
				<th>Parameters</th>
				<th>Example URL</th>
				<th>Response</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Select All</td>
				<td>/borrow</td>
				<td>GET</td>
				<td>null</td>
				<td>/borrow</td>
				<td>json_data</td>
			</tr>
			<tr>
				<td>Borrow Book</td>
				<td>/borrow/{id_book}/{id_member}</td>
				<td>POST</td>
				<td>id_member|id_member</td>
				<td>/borrow/2/3</td>
				<td>json_data</td>
			</tr>
			<tr>
				<td>Restore Book</td>
				<td>/borrow/{id}</td>
				<td>POST</td>
				<td>id_borrow</td>
				<td>/borrow/2</td>
				<td>json_data (kode_buku)</td>
			</tr>
		</tbody>
	</table>
