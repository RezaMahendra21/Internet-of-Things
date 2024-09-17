#include <Wire.h>
#include <Adafruit_MCP23017.h>
#include <Adafruit_RGBLCDShield.h>

Adafruit_RGBLCDShield lcd = Adafruit_RGBLCDShield();

void setup() {
  // Debugging output
  Serial.begin(9600);
  // set up the LCD's number of columns and rows: 
  lcd.begin(16, 2);
  lcd.print("Be sure to drink");
  lcd.setCursor(0, 1);
  lcd.print("your Ovaltine");
  lcd.setBacklight(0x7);

}

void loop() {

  uint8_t buttons = lcd.readButtons();

  if (buttons) {
    
    lcd.clear();
    lcd.setCursor(0,0);
    
    if (buttons & BUTTON_UP) {
      lcd.print("pressed UP");
    }
    if (buttons & BUTTON_DOWN) {
      lcd.print("pressed DOWN");
    }
    if (buttons & BUTTON_LEFT) {
     lcd.print("pressed LEFT");
    }
    if (buttons & BUTTON_RIGHT) {
      lcd.print("pressed RIGHT");
    }
    if (buttons & BUTTON_SELECT) {
      lcd.print("pressed SELECT");
    }
  }
  
}

