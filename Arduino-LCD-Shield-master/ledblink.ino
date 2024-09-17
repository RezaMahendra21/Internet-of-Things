#include <Wire.h>
#include <Adafruit_MCP23017.h>
#include <Adafruit_RGBLCDShield.h>

Adafruit_RGBLCDShield lcd = Adafruit_RGBLCDShield();

void setup() {
  Serial.begin(9600);
  lcd.begin(16, 2);
  lcd.print("LED MODE:");
  lcd.setCursor(0,1);
  // off by default
  lcd.print("OFF");
  lcd.setBacklight(0x7);
  pinMode(53, OUTPUT);
}

void loop() {

  uint8_t buttons = lcd.readButtons();
  
  lcd.setCursor(0,0);
  lcd.print("LED MODE:");
  
  if (buttons) {
    
    lcd.clear();      
    
    if (buttons & BUTTON_UP) {
      // turn led on
      digitalWrite(53, HIGH);
      // display it
      lcd.setCursor(0,1);
      lcd.print("ON");
    }
    
    if (buttons & BUTTON_DOWN) {
      // turn led off
      digitalWrite(53, LOW);
      // display it
      lcd.setCursor(0,1);
      lcd.print("OFF");
    }   
  }  
}

