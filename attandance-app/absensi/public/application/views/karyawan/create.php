<div class="row">
	<div class="col-12">
		<div class="card">
			<form action="<?= base_url('karyawan/store') ?>" method="post">
				<div class="card-header">
					<h4 class="card-title">Tambah Karyawan</h4>
				</div>
				<div class="card-body border-top py-0 my-3">
					<h4 class="text-muted my-3">Profil</h4>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="form-group">
								<label for="nik">NIK : </label>
								<input type="text" name="nik" id="nik" class="form-control" placeholder="Masukan No. NIK" required="reuqired" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="fullname">Nama Lengkap : </label>
								<input type="text" name="fullname" id="fullname" class="form-control" placeholder="Masukana Nama Lengkap Karyawan" required="reuqired" />
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="nickname">Nama Panggilan : </label>
								<input type="text" name="nickname" id="nickname" class="form-control" placeholder="Masukan Nama Panggilan Karyawan" required="reuqired" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="gender">Jenis Kelamin</label>
								<select name="gender" id="gender" class="form-control">
									<option value="M">laki-laki</option>
									<option value="F">perempuan</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="birthDate">Tanggal Lahir : </label>
								<input type="date" name="birthDate" id="birthDate" class="form-control" required="reuqired" />
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="placeOfBirth">Tempat Lahir : </label>
								<input type="text" name="placeOfBirth" id="placeOfBirth" class="form-control" placeholder="Tempat lahir" required="reuqired" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="telp">No. Telp : </label>
								<input type="tel" name="telp" id="telp" class="form-control" placeholder="Masukan No. Telp" required="reuqired" />
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="email">E-mail : </label>
								<input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email" required="reuqired" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="addressKTP">Alamat {KTP}</label>
								<textarea name="addressKTP" id="" class="form-control"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="addressCurrent">Alamat {Saat ini}</label>
								<textarea name="addressCurrent" id="" class="form-control"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="religion">Agama</label>
								<select name="religion" id="religion" class="form-control">
									<option value="I">Islam</option>
									<option value="P">Protestan</option>
									<option value="K">katholic</option>
									<option value="B">Buddha</option>
									<option value="H">Hindu</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="marital">Status Pernikahan</label>
								<select name="marital" id="marital" class="form-control">
									<option value="A">Lajang</option>
									<option value="B">Menikah tanpa anak</option>
									<option value="C">Menikah 1 anak</option>
									<option value="X">Lainnya</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="npwp">No NPWP : </label>
								<input type="text" name="npwp" id="npwp" class="form-control" placeholder="Masukan No. NPWP" required="reuqired" />
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="bpjs">No BPJS : </label>
								<input type="text" name="bpjs" id="bpjs" class="form-control" placeholder="Masukan No. NPWP" required="reuqired" />
							</div>
						</div>
					</div>
				</div>
				<div class="card-body border-top py-0 my-3">
					<h4 class="text-muted my-3">Akun</h4>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="form-group">
								<label for="divisi">Divisi : </label>
								<select name="divisi" id="divisi" class="form-control">
									<option value="" disabled selected>-- Pilih Divisi --</option>
									<?php foreach ($divisi as $d) : ?>
										<option value="<?= $d->id_divisi ?>"><?= $d->nama_divisi ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username" required="reuqired" />
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" class="form-control" placeholder="********" required="reuqired" />
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Simpan <i class="fa fa-save"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>
