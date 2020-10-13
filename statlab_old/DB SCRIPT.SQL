USE [statlab]
GO
-- users table, add columns ProviderID and DateIn
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[users]') AND type in (N'U'))
DROP TABLE [dbo].[users]
CREATE TABLE [dbo].[users](
	[username] [varchar](500) NULL,
	[email] [varchar](255) NULL,
	[password] [varchar](32) NULL,
	[DOB] [date] NULL,
	[zipcode] [varchar](50) NULL,
	[phone] [varchar](50) NULL,
	[SSN] [varchar](50) NULL,
	[clientID] [varchar](50) NOT NULL,
	[patientID] [varchar](50) NULL,
	[ProviderID] [varchar](50) NULL,
	[DateIn] [datetime] NOT NULL
) ON [PRIMARY]
ALTER TABLE [dbo].[users] ADD  CONSTRAINT [DF_users_DateIn]  DEFAULT (getdate()) FOR [DateIn]
GO
-- user data
INSERT INTO users(username, email, password, DOB, zipcode, phone, SSN, clientID, patientID, ProviderID, DateIn) VALUES ('doc@money.com', NULL, '823638ce34deb93a0faa7ea1e26de93b', NULL, NULL, NULL, NULL, '79', NULL, NULL, 'Sep 21 2020  8:56PM')
INSERT INTO users(username, email, password, DOB, zipcode, phone, SSN, clientID, patientID, ProviderID, DateIn) VALUES (NULL, NULL, '823638ce34deb93a0faa7ea1e26de93b', '1950-01-01', '33101', '5555551212', NULL, '79', '63387', NULL, 'Sep 21 2020  8:56PM')
INSERT INTO users(username, email, password, DOB, zipcode, phone, SSN, clientID, patientID, ProviderID, DateIn) VALUES (NULL, NULL, '823638ce34deb93a0faa7ea1e26de93b', '1950-02-02', '33101', '5555551212', NULL, '79', '63388', NULL, 'Sep 21 2020  8:56PM')
INSERT INTO users(username, email, password, DOB, zipcode, phone, SSN, clientID, patientID, ProviderID, DateIn) VALUES (NULL, NULL, '823638ce34deb93a0faa7ea1e26de93b', '1950-03-03', '33101', '5555551212', NULL, '79', '63389', NULL, 'Sep 21 2020  8:56PM')
INSERT INTO users(username, email, password, DOB, zipcode, phone, SSN, clientID, patientID, ProviderID, DateIn) VALUES (NULL, NULL, '823638ce34deb93a0faa7ea1e26de93b', '1950-04-04', '33101', '5555551212', NULL, '79', '63390', NULL, 'Sep 21 2020  8:56PM')
INSERT INTO users(username, email, password, DOB, zipcode, phone, SSN, clientID, patientID, ProviderID, DateIn) VALUES ('doc@money.com', NULL, 'C9B65C09C21E829D5EC5B60269C6FE21', NULL, NULL, NULL, NULL, '79', NULL, '1', 'Sep 21 2020  8:56PM')
INSERT INTO users(username, email, password, DOB, zipcode, phone, SSN, clientID, patientID, ProviderID, DateIn) VALUES ('doc2@money.com', NULL, 'F46455D513A942868BC48EAA16336A38', NULL, NULL, NULL, NULL, '79', NULL, '2', 'Sep 21 2020  8:56PM')
GO
-- documents table, added columns ProviderID and DateIn
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[documents]') AND type in (N'U'))
DROP TABLE [dbo].[documents]
CREATE TABLE [dbo].[documents](
	[clientID] [varchar](50) NULL,
	[patientID] [varchar](50) NULL,
	[patientname] [varchar](500) NULL,
	[daterun] [date] NULL,
	[daterequested] [date] NULL,
	[documentname] [varchar](1000) NULL,
	[ProviderID] [varchar](50) NULL,
	[DateIn] [datetime] NOT NULL
) ON [PRIMARY]
ALTER TABLE [dbo].[documents] ADD  CONSTRAINT [DF_documents_DateIn]  DEFAULT (getdate()) FOR [DateIn]
GO
INSERT INTO documents(clientID, patientID, patientname, daterun, daterequested, documentname, ProviderID, DateIn) VALUES ('79', '63388', 'TEST, PATIENT 02', '2020-08-31', '2020-08-31', 'PDF/0079/TESTPATIENT02_PON_79-2-275614.pdf', '1', 'Sep 21 2020  8:54PM')
INSERT INTO documents(clientID, patientID, patientname, daterun, daterequested, documentname, ProviderID, DateIn) VALUES ('79', '63389', 'TEST, PATIENT 03', '2020-08-31', '2020-08-31', 'PDF/0079/TESTPATIENT03_PON_79-2-275615.pdf', '2', 'Sep 21 2020  8:54PM')
INSERT INTO documents(clientID, patientID, patientname, daterun, daterequested, documentname, ProviderID, DateIn) VALUES ('79', '63390', 'TEST, PATIENT 04', '2020-08-31', '2020-08-31', 'PDF/0079/TESTPATIENT04_PON_79-2-275616.pdf', '2', 'Sep 21 2020  8:54PM')
INSERT INTO documents(clientID, patientID, patientname, daterun, daterequested, documentname, ProviderID, DateIn) VALUES ('79', '63387', 'TEST, PATIENT 01', '2020-08-31', '2020-08-31', 'PDF/0079/TESTPATIENT01_PON_79-2-275613.pdf', '1', 'Sep 21 2020  8:54PM')
GO
--add Race table
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Race]') AND type in (N'U'))
DROP TABLE [dbo].[Race]
CREATE TABLE [dbo].[Race](
	[Company] [int] NOT NULL,
	[RaceID] [int] NOT NULL,
	[RaceDesc] [varchar](50) NOT NULL,
	[Category] [int] NOT NULL,
	[EnteredBy] [varchar](100) NOT NULL,
	[ChangedBy] [varchar](100) NULL,
	[DateIn] [datetime] NOT NULL,
	[DateChange] [datetime] NULL,
 CONSTRAINT [PK__Race__23DE44F1] PRIMARY KEY CLUSTERED 
(
	[Company] ASC,
	[RaceID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, FILLFACTOR = 80) ON [PRIMARY]
) ON [PRIMARY]
ALTER TABLE [dbo].[Race] ADD  CONSTRAINT [DF__Race__Company__24D2692A]  DEFAULT ((0)) FOR [Company]
ALTER TABLE [dbo].[Race] ADD  CONSTRAINT [DF_Race_Category]  DEFAULT ((1)) FOR [Category]
ALTER TABLE [dbo].[Race] ADD  CONSTRAINT [DF__Race__DateIn__25C68D63]  DEFAULT (getdate()) FOR [DateIn]
GO
-- add Race table data
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 0, 'Unknown', 0, 'SLM', NULL, 'May  5 2020 11:13AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 1, 'American Indian or Alaska Native', 0, 'SLM', NULL, 'May  5 2020 11:13AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 2, 'Asian', 1, 'SLM', NULL, 'May  5 2020 11:13AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 3, 'Black or African American', 0, 'SLM', NULL, 'May  5 2020 11:13AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 4, 'Other Race', 0, 'SLM', NULL, 'May  5 2020 11:13AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 5, 'Native Hawaiian or Other Pacific Islander', 1, 'SLM', NULL, 'May  5 2020 11:13AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 6, 'White', 0, 'SLM', NULL, 'May  5 2020 11:13AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 7, 'Asian Indian', 2, 'SLM', NULL, 'Sep 14 2020 12:00AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 8, 'Chinese', 2, 'SLM', NULL, 'Sep 14 2020  8:38PM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 9, 'Filipino', 2, 'SLM', NULL, 'Sep 14 2020 12:00AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 10, 'Japanese', 2, 'SLM', NULL, 'Sep 14 2020 12:00AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 11, 'Korean', 2, 'SLM', NULL, 'Sep 14 2020 12:00AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 12, 'Vietnamese', 2, 'SLM', NULL, 'Sep 14 2020 12:00AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 13, 'Other Asian', 2, 'SLM', NULL, 'Sep 14 2020 12:00AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 14, 'Native Hawaiian', 2, 'SLM', NULL, 'Sep 14 2020 12:00AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 15, 'Guamanian or Chamorro', 2, 'SLM', NULL, 'Sep 14 2020 12:00AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 16, 'Other Pacific Islander', 2, 'SLM', NULL, 'Sep 14 2020 12:00AM', NULL)
INSERT INTO Race(Company, RaceID, RaceDesc, Category, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 17, 'Samoan', 2, 'SLM', NULL, 'Sep 14 2020 12:00AM', NULL)
GO
-- add Ethnicity table
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Ethnicity]') AND type in (N'U'))
DROP TABLE [dbo].[Ethnicity]
CREATE TABLE [dbo].[Ethnicity](
	[Company] [int] NOT NULL,
	[EthnicityID] [int] NOT NULL,
	[Ethnicity] [varchar](100) NOT NULL,
	[EnteredBy] [varchar](100) NOT NULL,
	[ChangedBy] [varchar](100) NULL,
	[DateIn] [datetime] NOT NULL,
	[DateChange] [datetime] NULL,
 CONSTRAINT [PK__Ethnicity__2610A626] PRIMARY KEY CLUSTERED 
(
	[Company] ASC,
	[EthnicityID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, FILLFACTOR = 80) ON [PRIMARY]
) ON [PRIMARY]
ALTER TABLE [dbo].[Ethnicity] ADD  CONSTRAINT [DF__Ethnicity__Compa__2704CA5F]  DEFAULT ((0)) FOR [Company]
ALTER TABLE [dbo].[Ethnicity] ADD  CONSTRAINT [DF__Ethnicity__DateI__27F8EE98]  DEFAULT (getdate()) FOR [DateIn]
GO
-- add Ethnicity table data
INSERT INTO Ethnicity(Company, EthnicityID, Ethnicity, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 0, 'Unknown', 'Apex', NULL, 'Jan  1 2000 12:00AM', NULL)
INSERT INTO Ethnicity(Company, EthnicityID, Ethnicity, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 1, 'Hispanic or Latino', 'Apex', NULL, 'Jan  1 2000 12:00AM', 'Sep 14 2020  8:52PM')
INSERT INTO Ethnicity(Company, EthnicityID, Ethnicity, EnteredBy, ChangedBy, DateIn, DateChange) VALUES (0, 2, 'Not Hispanic or Latino', 'Apex', NULL, 'Jan  1 2000 12:00AM', 'Sep 14 2020  8:53PM')
GO
-- add SpecimenType table
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[SpecimenType]') AND type in (N'U'))
DROP TABLE [dbo].[SpecimenType]
CREATE TABLE [dbo].[SpecimenType](
	[SpecimenType] [varchar](30) NOT NULL,
	[RowStatus] [smallint] NOT NULL,
	[EnteredBy] [varchar](100) NOT NULL,
	[ChangedBy] [varchar](100) NULL,
	[DateIn] [datetime] NOT NULL,
	[DateChange] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[SpecimenType] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, FILLFACTOR = 80) ON [PRIMARY]
) ON [PRIMARY]
ALTER TABLE [dbo].[SpecimenType] ADD  DEFAULT ((0)) FOR [RowStatus]
ALTER TABLE [dbo].[SpecimenType] ADD  DEFAULT (getdate()) FOR [DateIn]
GO
-- add SpecimenType table data
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Amniotic', 0, 'APEX', NULL, 'Nov 13 2012 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Aspirate', 0, 'APEX', NULL, 'Jan  1 2008 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Blood', 0, 'APEX', NULL, 'Nov 13 2012 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Catheter', 1, 'APEX', NULL, 'Jan  1 2008 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Cervical', 0, 'APEX', NULL, 'Nov 13 2012 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Clippings', 0, 'APEX', NULL, 'Jan  1 2008 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('CSF', 0, 'ApexDeveloper', NULL, 'Oct  7 2011  7:54PM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Fluid', 0, 'APEX', NULL, 'Jan  1 2008 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('IUD', 0, 'APEX', NULL, 'Jan  1 2008 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('N/A', 0, 'APEX', NULL, 'Jan  1 2008 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Nares', 0, 'ApexDeveloper', NULL, 'Jun 21 2013 11:03AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Other', 1, 'APEX', NULL, 'Nov 13 2012 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Plasma', 1, 'APEX', NULL, 'Jan  1 2008 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Ratio', 0, 'APEX', NULL, 'Nov 13 2012 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Saliva', 0, 'APEX', NULL, 'Nov 13 2012 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Scrapings', 0, 'APEX', NULL, 'Jan  1 2008 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Semen', 0, 'APEX', NULL, 'Jan  1 2008 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Serum', 1, 'ApexDeveloper', NULL, 'Oct  7 2011  7:50PM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Sputum', 0, 'APEX', NULL, 'Jan  1 2008 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Stool', 1, 'APEX', NULL, 'Jan  1 2008 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Swab from nasal sinus', 1, 'APEX', NULL, 'Nov 13 2012 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Synovial', 0, 'APEX', NULL, 'Nov 13 2012 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Tissue', 0, 'APEX', NULL, 'Jan  1 2008 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Urethral', 0, 'APEX', NULL, 'Nov 13 2012 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Urine', 1, 'APEX', NULL, 'Jan  1 2008 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Urine, Timed', 0, 'ApexDeveloper', NULL, 'Apr  1 2012  2:45PM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Washings', 0, 'APEX', NULL, 'Jan  1 2008 12:00AM', NULL)
INSERT INTO SpecimenType(SpecimenType, RowStatus, EnteredBy, ChangedBy, DateIn, DateChange) VALUES ('Whole Blood', 1, 'APEX', NULL, 'Jan  1 2008 12:00AM', NULL)
GO
-- add Provider table
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Providers]') AND type in (N'U'))
DROP TABLE [dbo].[Providers]
CREATE TABLE [dbo].[Providers](
	[ClientID] [varchar](50) NOT NULL,
	[ProviderID] [varchar](50) NOT NULL,
	[ProviderName] [varchar](200) NOT NULL,
	[Status] [int] NOT NULL,
 CONSTRAINT [PK_Providers] PRIMARY KEY CLUSTERED 
(
	[ClientID] ASC,
	[ProviderID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
-- add Provider table data (sample of 2 providers)
INSERT INTO Providers(ClientID, ProviderID, ProviderName, Status) VALUES ('79', '1', 'Test Provider 1', 1)
INSERT INTO Providers(ClientID, ProviderID, ProviderName, Status) VALUES ('79', '2', 'Test Provider 2', 1)
GO
-- add Tests table
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Tests]') AND type in (N'U'))
DROP TABLE [dbo].[Tests]
CREATE TABLE [dbo].[Tests](
	[ClientID] [varchar](50) NOT NULL,
	[TestID] [varchar](50) NOT NULL,
	[TestName] [varchar](200) NOT NULL,
	[Status] [int] NOT NULL,
	[DateIn] [datetime] NOT NULL,
 CONSTRAINT [PK_Tests] PRIMARY KEY CLUSTERED 
(
	[TestID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
ALTER TABLE [dbo].[Tests] ADD  CONSTRAINT [DF_Tests_Status]  DEFAULT ((0)) FOR [Status]
ALTER TABLE [dbo].[Tests] ADD  CONSTRAINT [DF_Tests_DateIn]  DEFAULT (getdate()) FOR [DateIn]
GO
-- add Tests table data
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('0', '1007', 'BASIC METABOLIC PANEL (BMP) (80048)', 1, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('0', '1009', 'LIPID PANEL', 1, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('0', '1012', 'COMPREHENSIVE METABOLIC PANEL (CMP) (80053)', 1, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('0', '1013', 'HEPATIC FUNCTION PANEL (81508)', 1, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('0', '1014', 'PSA, TOTAL', 1, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('0', '1015', 'PSA, FREE', 1, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('0', '1016', 'TESTOSTERONE, FREE (84402)', 1, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('0', '1017', 'THYROID STIMULATING HORMONE (TSH) (84443)', 1, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('0', '1018', 'THYROXINE FREE (FT4) (84439)', 1, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('79', '10214', 'SARS-COV-2', 1, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('0', '1023', 'CBC w/ DIFF (85025)', 1, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('0', '1133', 'HOMOCYSTEINE (83090)', 1, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('79', '1136', 'VITAMIN B12 (82607)', 1, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('0', '1164', 'MAGNESIUM (83735)', 1, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('0', '1182', 'THYROID PANEL (84439)', 1, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('0', '1243', 'HEMOGLOBIN A1C (83036)', 0, 'Sep 21 2020 10:11PM')
INSERT INTO Tests(ClientID, TestID, TestName, Status, DateIn) VALUES ('0', '1407', 'SEDIMENTATION RATE (85651)', 1, 'Sep 21 2020 10:11PM')
GO
-- add Patient table
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Patients]') AND type in (N'U'))
DROP TABLE [dbo].[Patients]
CREATE TABLE [dbo].[Patients](
	[ClientID] [varchar](50) NOT NULL,
	[PatientID] [varchar](50) NOT NULL,
	[NameLast] [varchar](200) NOT NULL,
	[NameFirst] [varchar](200) NOT NULL,
	[DOB] [date] NOT NULL,
	[Sex] [varchar](1) NOT NULL,
	[MRN] [varchar](200) NOT NULL,
	[RaceID] [int] NOT NULL,
	[EthnicityID] [int] NOT NULL,
	[StreetAddress] [varchar](200) NULL,
	[ZipCode] [varchar](100) NULL,
	[City] [varchar](200) NULL,
	[State] [varchar](100) NULL,
	[County] [varchar](200) NULL,
	[Telephone] [varchar](200) NULL,
	[Email] [varchar](200) NULL,
	[DateIn] [datetime] NOT NULL,
 CONSTRAINT [PK_Patients] PRIMARY KEY CLUSTERED 
(
	[PatientID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
ALTER TABLE [dbo].[Patients] ADD  CONSTRAINT [DF_Patients_RaceID]  DEFAULT ((0)) FOR [RaceID]
ALTER TABLE [dbo].[Patients] ADD  CONSTRAINT [DF_Patients_EthnicityID]  DEFAULT ((0)) FOR [EthnicityID]
ALTER TABLE [dbo].[Patients] ADD  CONSTRAINT [DF_Patients_DateIn]  DEFAULT (getdate()) FOR [DateIn]
GO
-- add Patient table data
INSERT INTO Patients(ClientID, PatientID, NameLast, NameFirst, DOB, Sex, MRN, RaceID, EthnicityID, StreetAddress, ZipCode, City, State, County, Telephone, Email, DateIn) VALUES ('79', '63387', 'TEST', 'PATIENT 01', '1950-01-01', 'M', '4', 0, 0, NULL, NULL, NULL, NULL, NULL, '5555551212', NULL, 'Sep 21 2020  8:45PM')
INSERT INTO Patients(ClientID, PatientID, NameLast, NameFirst, DOB, Sex, MRN, RaceID, EthnicityID, StreetAddress, ZipCode, City, State, County, Telephone, Email, DateIn) VALUES ('79', '63388', 'TEST', 'PATIENT 02', '1950-02-02', 'M', '1', 0, 0, '123 Main Street', '33101', 'Miami', 'FL', 'Miami-Dade', '5555551212', 'myemail@internet.com', 'Sep 21 2020  8:38PM')
INSERT INTO Patients(ClientID, PatientID, NameLast, NameFirst, DOB, Sex, MRN, RaceID, EthnicityID, StreetAddress, ZipCode, City, State, County, Telephone, Email, DateIn) VALUES ('79', '63389', 'TEST', 'PATIENT 03', '1950-03-03', 'F', '2', 6, 2, '', NULL, NULL, NULL, NULL, '5555551212', NULL, 'Sep 21 2020  8:39PM')
INSERT INTO Patients(ClientID, PatientID, NameLast, NameFirst, DOB, Sex, MRN, RaceID, EthnicityID, StreetAddress, ZipCode, City, State, County, Telephone, Email, DateIn) VALUES ('79', '63390', 'TEST', 'PATIENT 04', '1950-04-04', 'M', '3', 3, 1, '123 OAK STREET', '33101', 'MIAMI', 'FL', NULL, '5555551212', NULL, 'Sep 21 2020  8:44PM')
GO
-- add Orders table
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[Orders]') AND type in (N'U'))
DROP TABLE [dbo].[Orders]
CREATE TABLE [dbo].[Orders](
	[OrderID] [int] IDENTITY(1,1) NOT NULL,
	[ProviderID] [varchar](50) NOT NULL,
	[ClientID] [varchar](50) NOT NULL,
	[PatientID] [varchar](50) NOT NULL,
	[CollectedBy] [varchar](200) NULL,
	[SpecimenType] [varchar](200) NULL,
	[DateOrdered] [datetime] NOT NULL,
	[DateCollected] [datetime] NOT NULL,
	[OrderStatus] [int] NOT NULL,
	[DateIn] [datetime] NOT NULL,
 CONSTRAINT [PK_Orders] PRIMARY KEY CLUSTERED 
(
	[OrderID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
ALTER TABLE [dbo].[Orders] ADD  CONSTRAINT [DF_Orders_DateOrdered]  DEFAULT (getdate()) FOR [DateOrdered]
ALTER TABLE [dbo].[Orders] ADD  CONSTRAINT [DF_Orders_DateCollected]  DEFAULT (getdate()) FOR [DateCollected]
ALTER TABLE [dbo].[Orders] ADD  CONSTRAINT [DF_Orders_OrderStatus]  DEFAULT ((0)) FOR [OrderStatus]
ALTER TABLE [dbo].[Orders] ADD  CONSTRAINT [DF_Orders_DateIn]  DEFAULT (getdate()) FOR [DateIn]
GO
-- add OrderTests table
IF  EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[OrderTests]') AND type in (N'U'))
DROP TABLE [dbo].[OrderTests]
CREATE TABLE [dbo].[OrderTests](
	[OrderID] [int] NOT NULL,
	[TestID] [varchar](50) NOT NULL,
	[SeqNo] [int] NOT NULL,
	[DateIn] [datetime] NOT NULL,
 CONSTRAINT [PK_OrderTests] PRIMARY KEY CLUSTERED 
(
	[OrderID] ASC,
	[TestID] ASC,
	[SeqNo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
ALTER TABLE [dbo].[OrderTests] ADD  CONSTRAINT [DF_OrderTests_DateIn]  DEFAULT (getdate()) FOR [DateIn]
GO
-- add Orders/OrderTests table data (sample of 2 orders)
SET IDENTITY_INSERT Orders ON 
INSERT INTO Orders(OrderID, ProviderID, ClientID, PatientID, CollectedBy, SpecimenType, DateOrdered, DateCollected, OrderStatus, DateIn) VALUES (3, '1', '79', '63388', 'Tech 1', 'Serum', 'Sep 21 2020 12:00AM', 'Sep 21 2020 12:00AM', 0, 'Sep 21 2020  8:52PM')
INSERT INTO Orders(OrderID, ProviderID, ClientID, PatientID, CollectedBy, SpecimenType, DateOrdered, DateCollected, OrderStatus, DateIn) VALUES (4, '1', '79', '63387', 'Tech 2', 'Serum', 'Sep 21 2020  8:56PM', 'Sep 21 2020  8:56PM', 0, 'Sep 21 2020  8:56PM')
INSERT INTO Orders(OrderID, ProviderID, ClientID, PatientID, CollectedBy, SpecimenType, DateOrdered, DateCollected, OrderStatus, DateIn) VALUES (5, '2', '79', '63389', 'Tech 1', 'Whole Blood', 'Sep 21 2020  8:58PM', 'Sep 21 2020  8:58PM', 0, 'Sep 21 2020  8:58PM')
INSERT INTO Orders(OrderID, ProviderID, ClientID, PatientID, CollectedBy, SpecimenType, DateOrdered, DateCollected, OrderStatus, DateIn) VALUES (6, '2', '79', '63390', 'Tech 2', 'Serum', 'Sep 21 2020  8:58PM', 'Sep 21 2020  8:58PM', 0, 'Sep 21 2020  8:58PM')
SET IDENTITY_INSERT Orders OFF 
INSERT INTO OrderTests(OrderID, TestID, SeqNo) VALUES (3, '1009', 1)
INSERT INTO OrderTests(OrderID, TestID, SeqNo) VALUES (3, '1012', 0)
INSERT INTO OrderTests(OrderID, TestID, SeqNo) VALUES (3, '1182', 2)
INSERT INTO OrderTests(OrderID, TestID, SeqNo) VALUES (4, '1007', 1)
INSERT INTO OrderTests(OrderID, TestID, SeqNo) VALUES (4, '1164', 0)
INSERT INTO OrderTests(OrderID, TestID, SeqNo) VALUES (5, '1023', 0)
INSERT INTO OrderTests(OrderID, TestID, SeqNo) VALUES (6, '1012', 3)
INSERT INTO OrderTests(OrderID, TestID, SeqNo) VALUES (6, '1013', 4)
INSERT INTO OrderTests(OrderID, TestID, SeqNo) VALUES (6, '1016', 5)
INSERT INTO OrderTests(OrderID, TestID, SeqNo) VALUES (6, '1017', 6)
INSERT INTO OrderTests(OrderID, TestID, SeqNo) VALUES (6, '10214', 2)
INSERT INTO OrderTests(OrderID, TestID, SeqNo) VALUES (6, '1023', 1)
INSERT INTO OrderTests(OrderID, TestID, SeqNo) VALUES (6, '1133', 7)
INSERT INTO OrderTests(OrderID, TestID, SeqNo) VALUES (6, '1243', 0)
-- updated documents data w/ ProviderID
DELETE documents
INSERT INTO documents(clientID, patientID, patientname, daterun, daterequested, documentname, ProviderID) VALUES ('79', '63388', 'TEST, PATIENT 02', '2020-08-31', '2020-08-31', 'PDF/0079/TESTPATIENT02_PON_79-2-275614.pdf', '1')
INSERT INTO documents(clientID, patientID, patientname, daterun, daterequested, documentname, ProviderID) VALUES ('79', '63389', 'TEST, PATIENT 03', '2020-08-31', '2020-08-31', 'PDF/0079/TESTPATIENT03_PON_79-2-275615.pdf', '2')
INSERT INTO documents(clientID, patientID, patientname, daterun, daterequested, documentname, ProviderID) VALUES ('79', '63390', 'TEST, PATIENT 04', '2020-08-31', '2020-08-31', 'PDF/0079/TESTPATIENT04_PON_79-2-275616.pdf', '2')
INSERT INTO documents(clientID, patientID, patientname, daterun, daterequested, documentname, ProviderID) VALUES ('79', '63387', 'TEST, PATIENT 01', '2020-08-31', '2020-08-31', 'PDF/0079/TESTPATIENT01_PON_79-2-275613.pdf', '1')
GO
