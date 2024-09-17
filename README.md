# Enhanced-Online-Bus-Ticket-Booking-System-Project
Fixed a Major Issue where Users Couldn’t Book a Ticket Next To an Already Booked Ticket If The Gender Was Different. Added New Features To Enhance User Experience and System Functionality To an Existing Online Bus Ticket System To Make It More User-Friendly.
"For my project,
I developed an Enhanced Online Bus Ticket Booking System. 

The idea came from analyzing and understanding all existing online bus ticket booking systems. i found platforms they are RedBus and AllRide. 

I noticed these platforms have gender-based seating restrictions for female safety, which is good for solo female travelers but causes problems for families and groups who can't book seats together if the gender was different.I faced problem that is i did not possible to book ticket for my father beside my seat due to the gender-based seating restrictions.

My goal was to solve this issue by creating a system that allows families and groups to sit together while still maintaining safety for solo travelers.

I built the frontend using HTML, CSS, and JavaScript, and the backend with PHP. I used MySQL for the database. This tech stack allowed me to create a user-friendly interface and handle data securely using sessions.

The main feature I added is a 'group booking' option. Users can create a group profile for their family to travel. When booking, they can choose seats together regardless of gender.

The system works like this:
1. Users register and log in
2. They search for buses and select seats in real-time
3. For group bookings, they can choose seats together
4. The system processes payments securely
5. It automatically generate email that is your your ticket booking is confirmed.

I used PHP sessions for user authentication and also to store user information securely, and also allowing the system to know who's traveling together and enable mixed-gender seating for these groups.
 
 
"The core feature of my system is the group booking option. Here's how it works: When users register, they can create a family profile . When booking, if the usernames match - indicating they're part of the same family or group - the system allows male and female passengers to book seats next to each other. This solves the problem of families being separated due to gender restrictions while maintaining safety for solo travelers."
 

One significant challenge I faced was implementing this group booking feature while maintaining the existing safety measures for solo female travelers.
I overcame this by creating a conditional logic that applies gender restrictions only when usernames don't matchand also help use bus space more efficiently as seats don't have to left empty due to gender restriction.


This project taught me a lot about problem-solving in real-world scenarios that many travelers face and also improved my web development skills. 
It shows how a small change can make a big difference in user experience.
It really shows how we can improve existing system by really understanding what users need. 

In the future, I plan to add features like real-time bus tracking and a recommendation system for popular routes to further improve the user experience."
