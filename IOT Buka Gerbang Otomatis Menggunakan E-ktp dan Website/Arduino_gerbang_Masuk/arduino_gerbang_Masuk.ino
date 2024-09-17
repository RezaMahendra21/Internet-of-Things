#include<KRwifi.h>
char* ssid = "reza mahendra";
char* pass = "pagaralam";
char* server = "adkomback.com"; // server cadangan [ prakitblog.com ]

byte sda = 10;
byte rst = 9;
#include<KRrfid.h>

#include<Servo.h>
Servo servo;
#define pin_servo 5
String Status;

#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x27, 16, 2);

#define ir 4
int nilai_ir;

#include <DFPlayer_Mini_Mp3.h>

void setup() {
  Serial.begin(9600);

  mp3_set_serial (Serial);
  delay(10);

  lcd.begin();
  lcd.setCursor(0, 0);
  lcd.print("PAGAR MASUK");
  lcd.setCursor(0, 1);
  lcd.print("Connecting...");

  setWifi(ssid, pass);
  rfidBegin();

  servo.attach(3);
  servo.write(0);

  pinMode(ir, INPUT);

  lcd.clear();
  lcd.setCursor(0, 0);
  lcd.print("PAGAR MASUK");
  lcd.setCursor(0, 1);
  lcd.print("Connected");

  httpGet("adkomback.com", "/test", 80);
}

void loop() {
  getTAG();
  if (TAG != "") {
    lcd.clear();
    lcd.setCursor(0, 0);
    lcd.print("PAGAR MASUK");
    lcd.setCursor(0, 1);
    lcd.print("Tapping...");
    Serial.print("TAG :");
    Serial.println(TAG);

    String path = String() + "/project/kantor/input.php?tag=" + TAG + "&ket=Masuk";
    httpGet(server, path, 80);

    Serial.print("Respon: ");
    Serial.println(getData);

    if (getData != "Belum Terdaftar") {

       if (getData == "Sudah Masuk") {
       lcd.clear();
      lcd.setCursor(0, 0);
      lcd.print("PAGAR MASUK");
      lcd.setCursor(0, 1);
      lcd.print("Sudah Masuk");  
      delay(2000);
      }
      else if (getData == "Tidak Ada Jadwal") {
     lcd.clear();
      lcd.setCursor(0, 0);
      lcd.print("PAGAR MASUK");
      lcd.setCursor(0, 1);
      lcd.print("Sudah Masuk");  
      delay(2000);
      delay(2000);
      }
      else if (getData == "Belum Ikut Jadwal") {
      lcd.clear();
      lcd.setCursor(0, 0);
      lcd.print("PAGAR MASUK");
      lcd.setCursor(0, 1);
      lcd.print("Sudah Masuk");  
      delay(2000);
      }
      else {
      lcd.clear();
      lcd.setCursor(0, 0);
      lcd.print("PAGAR MASUK");
      lcd.setCursor(0, 1);
      lcd.print(getData);
      
      mp3_set_volume (30);
      delay(10);
      mp3_play ();
      delay(10);
      mp3_play (2);
      delay(10);
      
      naik();
      Status = "NAIK";
       }
    }
           
    if (getData == "Belum Terdaftar") {
      lcd.clear();
      lcd.setCursor(0, 0);
      lcd.print("PAGAR MASUK");
      lcd.setCursor(0, 1);
      lcd.print("Belum Terdaftar");
      mp3_set_volume (30);
      
      delay(10);
      mp3_play ();
      delay(10);
      mp3_play (1);
      delay(10);
      
      delay(2000);
    }

    lcd.clear();
    lcd.setCursor(0, 0);
    lcd.print("PAGAR MASUK");
    lcd.setCursor(0, 1);
    lcd.print("Connected");

    TAG = "";
  }

  nilai_ir = digitalRead(ir);
  if (nilai_ir == 0) {
    if (Status == "NAIK") {
      turun();
      Status = "";
    }
  }

}

void turun() {
  servo.attach(pin_servo);
  for (int i = 90; i > 0; i--) {
    servo.write(i);
    Serial.print("Servo Gerak ke Derajat: ");
    Serial.println(i);
    delay(2);
  }
  servo.detach();
}
void naik() {
  servo.attach(pin_servo);
  for (int i = 0; i < 90; i++) {
    servo.write(i);
    Serial.print("Servo Gerak ke Derajat: ");
    Serial.println(i);
    delay(2);
  }
  servo.detach();
}
