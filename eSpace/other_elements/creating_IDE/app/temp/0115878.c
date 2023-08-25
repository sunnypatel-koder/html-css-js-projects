from selenium import webdriver
import time
import pyautogui

web = webdriver.Chrome() 
web.get('https://google.com/')
e = web.find_element_by_xpath('/html/body/div[1]/div[3]/form/div[1]/div[1]/div[1]/div/div[2]/input')

location = e.location
size = e.size
w, h = size['width'], size['height']

print(location)
print(size)
print(w, h)

# pyautogui.moveTo(move,duration=1)
# time.sleep(2)