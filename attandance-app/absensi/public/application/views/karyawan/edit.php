<div class="row">
	<div class="col-12">
		<div class="card">
			<form action="<?= base_url('karyawan/update') ?>" method="post">
				<div class="card-header">
					<h4 class="card-title">Edit Karyawan</h4>
				</div>
				<div class="card-body border-top py-0 my-3">
					<h4 class="text-muted my-3">Profil</h4>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="form-group">
								<label for="nik">NIK : </label>
								<input type="hidden" name="id_user" value="<?= $this->uri->segment(3) ?>">
								<input type="text" name="nik" id="nik" value="<?= $karyawan->nik ?>" class="form-control" placeholder="Masukan NIK Karyawan" required="required" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="fullname">Nama Lengkap : </label>
								<input type="text" name="fullname" id="fullname" value="<?= $karyawan->fullname ?>" class="form-control" placeholder="Masukana fullname Lengkap Karyawan" required="required" />
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="nickname">Nama Panggilan : </label>
								<input type="text" name="nickname" id="nickname" value="<?= $karyawan->nickname ?>" class="form-control" placeholder="Masukana nickname Lengkap Karyawan" required="required" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="gender">Jenis Kelamin</label>
								<select name="gender" id="gender" class="form-control">
									<option value="M" <?= $karyawan->gender = "M" ? "selected" : "" ?>>laki-laki</option>
									<option value="F" <?= $karyawan->gender = "F" ? "selected" : "" ?>>perempuan</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="birthDate">Tanggal Lahir : </label>
								<input type="date" name="birthDate" id="birthDate" value="<?= $karyawan->birthDate ?>" class="form-control" required="required" />
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="placeOfBirth">Tempat Lahir : </label>
								<input type="text" name="placeOfBirth" id="placeOfBirth" value="<?= $karyawan->placeOfBirth ?>" class="form-control" placeholder="Masukana placeOfBirth Lengkap Karyawan" required="reuqired" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="telp">No. Telp : </label>
								<input type="tel" name="telp" id="telp" value="<?= $karyawan->telp ?>" class="form-control" placeholder="Masukan No. Telp" required="required" />
							</div>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label for="email">E-mail : </label>
								<input type="email" name="email" id="email" value="<?= $karyawan->email ?>" class="form-control" placeholder="Masukan Email" required="required" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="addressKTP">Alamat {KTP}</label>
								<textarea name="addressKTP" id="" class="form-control"><?= $karyawan->addressKTP ?></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="addressCurrent">Alamat {Saat ini}</label>
								<textarea name="addressCurrent" id="" class="form-control"><?= $karyawan->addressCurrent ?></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="religion">Agama</label>
								<select name="religion" id="religion" class="form-control">
									<option value="I" <?= $karyawan->religion = "I" ? "selected" : "" ?>>Islam</option>
									<option value="P" <?= $karyawan->religion = "P" ? "selected" : "" ?>>Protestan</option>
									<option value="K" <?= $karyawan->religion = "K" ? "selected" : "" ?>>katholic</option>
									<option value="B" <?= $karyawan->religion = "B" ? "selected" : "" ?>>Buddha</option>
									<option value="H" <?= $karyawan->religion = "H" ? "selected" : "" ?>>Hindu</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="marital">Status Pernikahan</label>
								<select name="marital" id="marital" class="form-control">
									<option value="A" <?= $karyawan->marital = "A" ? "selected" : "" ?>>Lajang</option>
									<option value="B" <?= $karyawan->marital = "B" ? "selected" : "" ?>>Menikah tanpa anak</option>
									<option value="C" <?= $karyawan->marital = "C" ? "selected" : "" ?>>Menikah 1 anak</option>
									<option value="X" <?= $karyawan->marital = "X" ? "selected" : "" ?>>Lainnya</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="npwp">No NPWP : </label>
								<input type="text" name="npwp" id="npwp" value="<?= $karyawan->npwp ?>" class="form-control" placeholder="Masukana npwp Lengkap Karyawan" required="reuqired" />
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="bpjs">No BPJS : </label>
								<input type="text" name="bpjs" id="bpjs" value="<?= $karyawan->bpjs ?>" class="form-control" placeholder="Masukana bpjs Lengkap Karyawan" required="reuqired" />
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
								<select name="divisi" id="divisi" value="<?= $karyawan->divisi ?>" class="form-control">
									<option value="" disabled selected>-- Pilih Divisi --</option>
									<?php foreach ($divisi as $d) : ?>
										<option value="<?= $d->id_divisi ?>" <?= ($d->id_divisi == $karyawan->divisi) ? 'selected' : '' ?>><?= $d->nama_divisi ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" name="username" id="username" value="<?= $karyawan->username ?>" class="form-control" placeholder="Masukan Username" required="required" />
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" class="form-control" placeholder="********" />
								<span class="text-danger">Tidak perlu diisi jika tidak ingin diganti!</span>
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
