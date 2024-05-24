function jumlahPeminjamanClick(option) {
    let value = option.value;
    if(value == '1000000') {
        document.getElementById('jml_diterima').value = '906000';
        document.getElementById('jml_diterima').children[1].setAttribute('selected','');
        document.getElementById('bunga').value = '94.000';
    } else if (value == '500000') {
        document.getElementById('jml_diterima').value = '441000';
        document.getElementById('jml_diterima').children[0].setAttribute('selected','');
        document.getElementById('bunga').value = '59.000';
    }
}