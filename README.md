<h3>
  <p>Author : Reza Mahendra</p>
  <p>Alamat : Pagar Alam, Sumatra Selatan</p>
</h3>

# Latihan Internet of Things (IoT)
Repositori ini berisi latihan untuk mempelajari dasar-dasar Internet of Things (IoT) menggunakan berbagai perangkat keras dan perangkat lunak. 
Melalui latihan ini, kamu akan belajar bagaimana sensor dan perangkat IoT bekerja, cara menghubungkannya ke jaringan, serta memproses data yang dihasilkan.

### Pendahuluan
Internet of Things (IoT) adalah sistem yang menghubungkan perangkat fisik seperti sensor, aktuator, dan sistem elektronik lainnya ke internet, 
memungkinkan mereka untuk berkomunikasi dan bertukar data. Dalam latihan ini, kita akan mengeksplorasi konsep dasar IoT dengan menggunakan 
perangkat keras populer seperti Arduino dan ESP8266 serta platform cloud IoT.

### Persiapan
Sebelum memulai, pastikan kamu memiliki alat dan perangkat berikut:
#### 1. Perangkat Keras:
Arduino UNO / ESP8266 / ESP32 atau platform mikrokontroler lainnya</p>
Sensor (misalnya, sensor suhu, sensor kelembaban)</p>
Breadboard dan kabel jumper</p>
LED, resistansi, dan komponen dasar lainnya</p>
#### 2. Perangkat Lunak:
Arduino IDE atau PlatformIO</p>
Python (untuk analisis data dan server cloud sederhana)</p>
Library seperti WiFi.h, DHT.h, dll.</p>

### Panduan Penggunaan
Klon repositori:git clone https://github.com/RezaMahendra21/Internet-of-Things/.git
cd Internet-of-Things 
1. Upload kode ke perangkat keras: Buka file .ino yang ada di folder hardware/ menggunakan Arduino IDE. Hubungkan perangkat mikrokontroler ke komputer dan upload kode ke perangkat.</p>
2. Jalankan server cloud (opsional):Jika menggunakan server lokal untuk menyimpan data atau mengontrol perangkat.jalankan file simple_server.py: python cloud/simple_server.py Pantau data:
3. Jika kamu menggunakan platform cloud (misalnya, ThingSpeak atau Blynk), buka dashboard kamu untuk memonitor data dari perangkat IoT. saya lebih suka buat dengan blynk dan thingspeak lebih mudah digunakan.
