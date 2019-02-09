insert into countries(nama_country,kode_country,benua, created_at,updated_at) values
('Indonesia','ID','Asia',Now(),Now()),
('Singapore','SG','Asia',Now(),Now()),
('Malaysia','MY','Asia',Now(),Now());

insert into cities(nama_city,country_id, created_at,updated_at) values
('Bali','ID',Now(),Now()),
('Lombok','ID',Now(),Now()),
('Jakarta','ID',Now(),Now());

insert into places(nama_place,city_id, description, created_at,updated_at) values
('Pantai Kuta','1','Pantai yang indah dengan kebudayaan yang menakjubkan.',Now(),Now()),
('Diving Heaven','2','Surganya Diving dengan biota bawah laut yang sangat indah.',Now(),Now()),
('Kepulauan Seribu','3','Gugusan pulau yang tidak pernah anda lihat sebelumnya.',Now(),Now());

insert into agencies(name,email,country_id,city_id,phone,language,experience,description,created_at,updated_at) values
('Djoko','djoko@gmail.com','ID','1','0899001199','English, Spanish, France','20 Years','16 years experience in the travel industry and native Indonesian, I have spent all these years discovering all the jewels that Indonesia has to offer. With more than 17.000 islands and 400 different languages, there is no other place like Indonesia on the planet. I will help you in building and organising an unforgettable trip and put all my experience and passion at work. Sumatra, Java, Bali, Lombok, Sulawesi and Flores have no secret for me and I would be pleased to design the perfect journey for you. Embark with me on the hidden paths of Indonesia!',Now(),Now()),
('Susan','susan@gmail.com','ID','1','08180921921','English, Spanish, Mandarin','15 Years','Our agency provides reliable, exclusive travel arrangements to Southeast Asia’s most intriguing and captivating lands. We have 8 regional and international centrally-owned and managed offices which ensures we provide both local support and expertise with domestic guarantees and understanding. Our itineraries are customized, tailored and bespoke to each traveler. We pride ourselves on offering specialized and creative itineraries and provide our clients with the opportunity to visit local historians, gastronomists and archaeologists. We offer a wonderful balance of cultural interaction and soft adventure. We hope to welcome you to Indonesia soon!',Now(),Now());

INSERT INTO reviews (agency_id, user_id, good_review, bad_review, summary, rating, created_at, updated_at) VALUES ('1', '1', 'He is speak English so fluent! Thats nice.', 'He is speak too much.', 'I think thats fine if you use headphones.', '4', '2019-02-09 06:14:09', '2019-02-09 06:14:09');
