-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 07:11 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qualityranking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bqr_status`
--

CREATE TABLE IF NOT EXISTS `bqr_status` (
  `id` int(11) NOT NULL,
  `product_id` int(100) NOT NULL,
  `pdr_marks_qsm` varchar(100) DEFAULT NULL,
  `pdr_comment` varchar(100) DEFAULT NULL,
  `pdr_randqa_rep` varchar(100) DEFAULT NULL,
  `pdr_marks_td` varchar(100) DEFAULT NULL,
  `layout_marks_qsm` varchar(100) DEFAULT NULL,
  `layout_comment` varchar(100) DEFAULT NULL,
  `layout_randqa_rep` varchar(100) DEFAULT NULL,
  `layout_marks_td` varchar(100) DEFAULT NULL,
  `pcb_marks_qsm` varchar(100) DEFAULT NULL,
  `pcb_comment` varchar(100) DEFAULT NULL,
  `pcb_randqa_rep` varchar(100) DEFAULT NULL,
  `pcb_marks_td` varchar(100) DEFAULT NULL,
  `mechdesign_marks_qsm` varchar(100) DEFAULT NULL,
  `mechdesign_comment` varchar(100) DEFAULT NULL,
  `mechdesign_randqa_rep` varchar(100) DEFAULT NULL,
  `mechdesign_marks_td` varchar(100) DEFAULT NULL,
  `group_a_marks_qsm` varchar(100) DEFAULT NULL,
  `group_a_comment` varchar(100) DEFAULT NULL,
  `group_a_randqa_rep` varchar(100) DEFAULT NULL,
  `group_a_marks_td` varchar(100) DEFAULT NULL,
  `group_b_marks_qsm` varchar(100) DEFAULT NULL,
  `group_b_comment` varchar(100) DEFAULT NULL,
  `group_b_randqa_rep` varchar(100) DEFAULT NULL,
  `group_b_marks_td` varchar(100) DEFAULT NULL,
  `bbt_marks_qsm` varchar(100) DEFAULT NULL,
  `bbt_comment` varchar(100) DEFAULT NULL,
  `bbt_randqa_rep` varchar(100) DEFAULT NULL,
  `bbt_marks_td` varchar(100) DEFAULT NULL,
  `packing_marks_qsm` varchar(100) DEFAULT NULL,
  `packing_comment` varchar(100) DEFAULT NULL,
  `packing_randqa_rep` varchar(100) DEFAULT NULL,
  `packing_marks_td` varchar(100) DEFAULT NULL,
  `qap_marks_qsm` varchar(100) DEFAULT NULL,
  `qap_comment` varchar(100) DEFAULT NULL,
  `qap_randqa_rep` varchar(100) DEFAULT NULL,
  `qap_marks_td` varchar(100) DEFAULT NULL,
  `bom_marks_qsm` varchar(100) DEFAULT NULL,
  `bom_comment` varchar(100) DEFAULT NULL,
  `bom_randqa_rep` varchar(100) DEFAULT NULL,
  `bom_marks_td` varchar(100) DEFAULT NULL,
  `integration_approved_marks_qsm` varchar(100) DEFAULT NULL,
  `integration_approved_comment` varchar(100) DEFAULT NULL,
  `integration_approved_randqa_rep` varchar(100) DEFAULT NULL,
  `integration_approved_marks_td` varchar(100) DEFAULT NULL,
  `qtatsoft_approved_marks_qsm` varchar(100) DEFAULT NULL,
  `qtatsoft_approved_comment` varchar(100) DEFAULT NULL,
  `qtatsoft_approved_randqa_rep` varchar(100) DEFAULT NULL,
  `qtatsoft_approved_marks_td` varchar(100) DEFAULT NULL,
  `rawmat_marks_qsm` varchar(100) DEFAULT NULL,
  `rawmat_comment` varchar(100) DEFAULT NULL,
  `rawmat_randqa_rep` varchar(100) DEFAULT NULL,
  `rawmat_marks_td` varchar(100) DEFAULT NULL,
  `emi_emc_marks_qsm` varchar(100) DEFAULT NULL,
  `emi_emc_comment` varchar(100) DEFAULT NULL,
  `emi_emc_randqa_rep` varchar(100) DEFAULT NULL,
  `emi_emc_marks_td` varchar(100) DEFAULT NULL,
  `majorqt_marks_qsm` varchar(100) DEFAULT NULL,
  `majorqt_comment` varchar(100) DEFAULT NULL,
  `majorqt_randqa_rep` varchar(100) DEFAULT NULL,
  `majorqt_marks_td` varchar(100) DEFAULT NULL,
  `cdr_marks_qsm` varchar(100) DEFAULT NULL,
  `cdr_comment` varchar(100) DEFAULT NULL,
  `cdr_randqa_rep` varchar(100) DEFAULT NULL,
  `cdr_marks_td` varchar(100) DEFAULT NULL,
  `reliability_marks_qsm` varchar(100) DEFAULT NULL,
  `reliability_comment` varchar(100) DEFAULT NULL,
  `reliability_randqa_rep` varchar(100) DEFAULT NULL,
  `reliability_marks_td` varchar(100) DEFAULT NULL,
  `fmeca_marks_qsm` varchar(100) DEFAULT NULL,
  `fmeca_comment` varchar(100) DEFAULT NULL,
  `fmeca_randqa_rep` varchar(100) DEFAULT NULL,
  `fmeca_marks_td` varchar(100) DEFAULT NULL,
  `sdrc_marks_qsm` varchar(100) DEFAULT NULL,
  `sdrc_comment` varchar(100) DEFAULT NULL,
  `sdrc_randqa_rep` varchar(100) DEFAULT NULL,
  `sdrc_marks_td` varchar(100) DEFAULT NULL,
  `pdr_minutes_marks_qsm` varchar(100) DEFAULT NULL,
  `pdr_minutes_comment` varchar(100) DEFAULT NULL,
  `pdr_minutes_randqa_rep` varchar(100) DEFAULT NULL,
  `pdr_minutes_marks_td` varchar(100) DEFAULT NULL,
  `packing_recomm_marks_qsm` varchar(100) DEFAULT NULL,
  `packing_recomm_comment` varchar(100) DEFAULT NULL,
  `packing_recomm_randqa_rep` varchar(100) DEFAULT NULL,
  `packing_recomm_marks_td` varchar(100) DEFAULT NULL,
  `pdr_units_marks_qsm` varchar(100) DEFAULT NULL,
  `pdr_units_comment` varchar(100) DEFAULT NULL,
  `pdr_units_randqa_rep` varchar(100) DEFAULT NULL,
  `pdr_units_marks_td` varchar(100) DEFAULT NULL,
  `qap_delayed_marks_qsm` varchar(100) DEFAULT NULL,
  `qap_delayed_comment` varchar(100) DEFAULT NULL,
  `qap_delayed_randqa_rep` varchar(100) DEFAULT NULL,
  `qap_delayed_marks_td` varchar(100) DEFAULT NULL,
  `integration_delayed_marks_qsm` varchar(100) DEFAULT NULL,
  `integration_delayed_comment` varchar(100) DEFAULT NULL,
  `integration_delayed_randqa_rep` varchar(100) DEFAULT NULL,
  `integration_delayed_marks_td` varchar(100) DEFAULT NULL,
  `qtatdoc_delayed_marks_qsm` varchar(100) DEFAULT NULL,
  `qtatdoc_delayed_comment` varchar(100) DEFAULT NULL,
  `qtatdoc_delayed_randqa_rep` varchar(100) DEFAULT NULL,
  `qtatdoc_delayed_marks_td` varchar(100) DEFAULT NULL,
  `total` varchar(100) NOT NULL,
  `inserted_date` varchar(100) DEFAULT NULL,
  `inserted_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `empid` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `empid`, `username`, `password`, `position`) VALUES
(1, '1', 'sadmin', 'sadmin', '0'),
(2, '2', 'Adithya', 'Adithya', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_add`
--

CREATE TABLE IF NOT EXISTS `product_add` (
  `sno` int(11) NOT NULL,
  `directorate` varchar(100) DEFAULT NULL,
  `division` varchar(100) DEFAULT NULL,
  `project` varchar(300) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `product_partno` varchar(200) DEFAULT NULL,
  `product_sno` varchar(200) DEFAULT NULL,
  `workcenter` varchar(100) DEFAULT NULL,
  `nodal_office` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `add_uname` varchar(100) NOT NULL,
  `inserted_date` varchar(100) DEFAULT NULL,
  `inserted_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_add`
--

INSERT INTO `product_add` (`sno`, `directorate`, `division`, `project`, `product_name`, `product_partno`, `product_sno`, `workcenter`, `nodal_office`, `status`, `add_uname`, `inserted_date`, `inserted_time`) VALUES
(14, 'DIIRS1', 'DIIRS', 'PROSPINA', 'IIR Seeker', 'HRS', 'HRS1', 'DIIRS', 'B V Rao', '1', 'sadmin', '2019-09-06', '16:13:02'),
(15, 'DRSS', 'DRSS', 'ASTRA', 'Ku-Band Seeker', 'ARS', '1', 'DRSS', 'Mr. N N Murthy', '0', 'sadmin', '2019-10-21', '11:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `remarks_bqr_status`
--

CREATE TABLE IF NOT EXISTS `remarks_bqr_status` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `pdr_obtained_marks` varchar(100) DEFAULT NULL,
  `pdr_remarks` varchar(100) DEFAULT NULL,
  `layout_obtained_marks` varchar(100) DEFAULT NULL,
  `layout_remarks` varchar(100) DEFAULT NULL,
  `pcb_obtained_marks` varchar(100) DEFAULT NULL,
  `pcb_remarks` varchar(100) DEFAULT NULL,
  `mechdesign_obtained_marks` varchar(100) DEFAULT NULL,
  `mechdesign_remarks` varchar(100) DEFAULT NULL,
  `group_a_obtained_marks` varchar(100) DEFAULT NULL,
  `group_a_remarks` varchar(100) DEFAULT NULL,
  `group_b_obtained_marks` varchar(100) DEFAULT NULL,
  `group_b_remarks` varchar(100) DEFAULT NULL,
  `bbt_obtained_marks` varchar(100) DEFAULT NULL,
  `bbt_remarks` varchar(100) DEFAULT NULL,
  `packing_obtained_marks` varchar(100) DEFAULT NULL,
  `packing_remarks` varchar(100) DEFAULT NULL,
  `qap_obtained_marks` varchar(100) DEFAULT NULL,
  `qap_remarks` varchar(100) DEFAULT NULL,
  `bom_obtained_marks` varchar(100) DEFAULT NULL,
  `bom_remarks` varchar(100) DEFAULT NULL,
  `integration_approved_obtained_marks` varchar(100) DEFAULT NULL,
  `integration_approved_remarks` varchar(100) DEFAULT NULL,
  `qtatsoft_approved_obtained_marks` varchar(100) DEFAULT NULL,
  `qtatsoft_approved_remarks` varchar(100) DEFAULT NULL,
  `rawmat_obtained_marks` varchar(100) DEFAULT NULL,
  `rawmat_remarks` varchar(100) DEFAULT NULL,
  `emi_emc_obtained_marks` varchar(100) DEFAULT NULL,
  `emi_emc_remarks` varchar(100) DEFAULT NULL,
  `majorqt_obtained_marks` varchar(100) DEFAULT NULL,
  `majorqt_remarks` varchar(100) DEFAULT NULL,
  `cdr_obtained_marks` varchar(100) DEFAULT NULL,
  `cdr_remarks` varchar(100) DEFAULT NULL,
  `reliability_obtained_marks` varchar(100) DEFAULT NULL,
  `reliability_remarks` varchar(100) DEFAULT NULL,
  `fmeca_obtained_marks` varchar(100) DEFAULT NULL,
  `fmeca_remarks` varchar(100) DEFAULT NULL,
  `sdrc_obtained_marks` varchar(100) DEFAULT NULL,
  `sdrc_remarks` varchar(100) DEFAULT NULL,
  `pdr_minutes_obtained_marks` varchar(100) DEFAULT NULL,
  `pdr_minutes_remarks` varchar(100) DEFAULT NULL,
  `packing_recomm_obtained_marks` varchar(100) DEFAULT NULL,
  `packing_recomm_remarks` varchar(100) DEFAULT NULL,
  `pdr_units_obtained_marks` varchar(100) DEFAULT NULL,
  `pdr_units_remarks` varchar(100) DEFAULT NULL,
  `qap_delayed_obtained_marks` varchar(100) DEFAULT NULL,
  `qap_delayed_remarks` varchar(100) DEFAULT NULL,
  `integration_delayed_obtained_marks` varchar(100) DEFAULT NULL,
  `integration_delayed_remarks` varchar(100) DEFAULT NULL,
  `qtatdoc_delayed_obtained_marks` varchar(100) DEFAULT NULL,
  `qtatdoc_delayed_remarks` varchar(100) DEFAULT NULL,
  `inserted_date` varchar(100) DEFAULT NULL,
  `inserted_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remarks_bqr_status`
--

INSERT INTO `remarks_bqr_status` (`id`, `product_id`, `pdr_obtained_marks`, `pdr_remarks`, `layout_obtained_marks`, `layout_remarks`, `pcb_obtained_marks`, `pcb_remarks`, `mechdesign_obtained_marks`, `mechdesign_remarks`, `group_a_obtained_marks`, `group_a_remarks`, `group_b_obtained_marks`, `group_b_remarks`, `bbt_obtained_marks`, `bbt_remarks`, `packing_obtained_marks`, `packing_remarks`, `qap_obtained_marks`, `qap_remarks`, `bom_obtained_marks`, `bom_remarks`, `integration_approved_obtained_marks`, `integration_approved_remarks`, `qtatsoft_approved_obtained_marks`, `qtatsoft_approved_remarks`, `rawmat_obtained_marks`, `rawmat_remarks`, `emi_emc_obtained_marks`, `emi_emc_remarks`, `majorqt_obtained_marks`, `majorqt_remarks`, `cdr_obtained_marks`, `cdr_remarks`, `reliability_obtained_marks`, `reliability_remarks`, `fmeca_obtained_marks`, `fmeca_remarks`, `sdrc_obtained_marks`, `sdrc_remarks`, `pdr_minutes_obtained_marks`, `pdr_minutes_remarks`, `packing_recomm_obtained_marks`, `packing_recomm_remarks`, `pdr_units_obtained_marks`, `pdr_units_remarks`, `qap_delayed_obtained_marks`, `qap_delayed_remarks`, `integration_delayed_obtained_marks`, `integration_delayed_remarks`, `qtatdoc_delayed_obtained_marks`, `qtatdoc_delayed_remarks`, `inserted_date`, `inserted_time`) VALUES
(1, '', '10', 'q', '', 'w', '', 'e', '', 'r', '', 't', '', 'y', '', 'u', '', 'i', '', 'o', '', 'p', '', 'a', '', 's', '', 'd', '', 'f', '', 'g', '', 'h', '', 'j', '', 'k', '', 'l', '', 'z', '', 'x', '', 'c', '', 'v', '', 'b', '', 'n', '2019-08-08', '08:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `remarks_uqr_status`
--

CREATE TABLE IF NOT EXISTS `remarks_uqr_status` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) DEFAULT NULL,
  `pcbwired_obtained_marks` varchar(100) DEFAULT NULL,
  `pcbwired_remarks` varchar(100) DEFAULT NULL,
  `pcb_inspection_obtained_marks` varchar(100) DEFAULT NULL,
  `pcb_inspection_remarks` varchar(100) DEFAULT NULL,
  `mechdimen_obtained_marks` varchar(100) DEFAULT NULL,
  `mechdimen_remarks` varchar(100) DEFAULT NULL,
  `burnin_obtained_marks` varchar(100) DEFAULT NULL,
  `burnin_remarks` varchar(100) DEFAULT NULL,
  `integration_qc_obtained_marks` varchar(100) DEFAULT NULL,
  `integration_qc_remarks` varchar(100) DEFAULT NULL,
  `initial_func_obtained_marks` varchar(100) DEFAULT NULL,
  `initial_func_remarks` varchar(100) DEFAULT NULL,
  `ess_obtained_marks` varchar(100) DEFAULT NULL,
  `ess_remarks` varchar(100) DEFAULT NULL,
  `entest_obtained_marks` varchar(100) DEFAULT NULL,
  `entest_remarks` varchar(100) DEFAULT NULL,
  `final_func_obtained_marks` varchar(100) DEFAULT NULL,
  `final_func_remarks` varchar(100) DEFAULT NULL,
  `unit_never_opened_obtained_marks` varchar(100) DEFAULT NULL,
  `unit_never_opened_remarks` varchar(100) DEFAULT NULL,
  `burnin_prob_obtained_marks` varchar(100) DEFAULT NULL,
  `burnin_prob_remarks` varchar(100) DEFAULT NULL,
  `ess_prob_obtained_marks` varchar(100) DEFAULT NULL,
  `ess_prob_remarks` varchar(100) DEFAULT NULL,
  `fab_obtained_marks` varchar(100) DEFAULT NULL,
  `fab_cremarks` varchar(100) DEFAULT NULL,
  `perform_dev_cert_td_obtained_marks` varchar(100) DEFAULT NULL,
  `perform_dev_cert_td_remarks` varchar(100) DEFAULT NULL,
  `waiver_obtained_marks` varchar(100) DEFAULT NULL,
  `waiver_remarks` varchar(100) DEFAULT NULL,
  `inserted_date` varchar(100) DEFAULT NULL,
  `inserted_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uqr_status`
--

CREATE TABLE IF NOT EXISTS `uqr_status` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `pcbwired_marks_qsm` varchar(100) DEFAULT NULL,
  `pcbwired_comment` varchar(100) DEFAULT NULL,
  `pcbwired_name` varchar(100) DEFAULT NULL,
  `pcbwired_marks_td` varchar(100) DEFAULT NULL,
  `pcb_inspection_marks_qsm` varchar(100) DEFAULT NULL,
  `pcb_inspection_comment` varchar(100) DEFAULT NULL,
  `pcb_inspection_name` varchar(100) DEFAULT NULL,
  `pcb_inspection_marks_td` varchar(100) DEFAULT NULL,
  `mechdimen_marks_qsm` varchar(100) DEFAULT NULL,
  `mechdimen_comment` varchar(100) DEFAULT NULL,
  `mechdimen_name` varchar(100) DEFAULT NULL,
  `mechdimen_marks_td` varchar(100) DEFAULT NULL,
  `burnin_marks_qsm` varchar(100) DEFAULT NULL,
  `burnin_comment` varchar(100) DEFAULT NULL,
  `burnin_name` varchar(100) DEFAULT NULL,
  `burnin_marks_td` varchar(100) DEFAULT NULL,
  `integration_qc_marks_qsm` varchar(100) DEFAULT NULL,
  `integration_qc_comment` varchar(100) DEFAULT NULL,
  `integration_qc_name` varchar(100) DEFAULT NULL,
  `integration_qc_marks_td` varchar(100) DEFAULT NULL,
  `initial_func_marks_qsm` varchar(100) DEFAULT NULL,
  `initial_func_comment` varchar(100) DEFAULT NULL,
  `initial_func_name` varchar(100) DEFAULT NULL,
  `initial_func_marks_td` varchar(100) DEFAULT NULL,
  `ess_marks_qsm` varchar(100) DEFAULT NULL,
  `ess_comment` varchar(100) DEFAULT NULL,
  `ess_name` varchar(100) DEFAULT NULL,
  `ess_marks_td` varchar(100) DEFAULT NULL,
  `entest_marks_qsm` varchar(100) DEFAULT NULL,
  `entest_comment` varchar(100) DEFAULT NULL,
  `entest_name` varchar(100) DEFAULT NULL,
  `entest_marks_td` varchar(100) DEFAULT NULL,
  `final_func_marks_qsm` varchar(100) DEFAULT NULL,
  `final_func_comment` varchar(100) DEFAULT NULL,
  `final_func_name` varchar(100) DEFAULT NULL,
  `final_func_marks_td` varchar(100) DEFAULT NULL,
  `unit_never_opened_marks_qsm` varchar(100) DEFAULT NULL,
  `unit_never_opened_comment` varchar(100) DEFAULT NULL,
  `unit_never_opened_name` varchar(100) DEFAULT NULL,
  `unit_never_opened_marks_td` varchar(100) DEFAULT NULL,
  `burnin_prob_marks_qsm` varchar(100) DEFAULT NULL,
  `burnin_prob_comment` varchar(100) DEFAULT NULL,
  `burnin_prob_name` varchar(100) DEFAULT NULL,
  `burnin_prob_marks_td` varchar(100) DEFAULT NULL,
  `ess_prob_marks_qsm` varchar(100) DEFAULT NULL,
  `ess_prob_comment` varchar(100) DEFAULT NULL,
  `ess_prob_name` varchar(100) DEFAULT NULL,
  `ess_prob_marks_td` varchar(100) DEFAULT NULL,
  `fab_marks_qsm` varchar(100) DEFAULT NULL,
  `fab_comment` varchar(100) DEFAULT NULL,
  `fab_name` varchar(100) DEFAULT NULL,
  `fab_marks_td` varchar(100) DEFAULT NULL,
  `perform_dev_cert_td_marks_qsm` varchar(100) DEFAULT NULL,
  `perform_dev_cert_td_comment` varchar(100) DEFAULT NULL,
  `perform_dev_cert_td_name` varchar(100) DEFAULT NULL,
  `perform_dev_cert_td_marks_td` varchar(100) DEFAULT NULL,
  `waiver_marks_qsm` varchar(100) DEFAULT NULL,
  `waiver_comment` varchar(100) DEFAULT NULL,
  `waiver_name` varchar(100) DEFAULT NULL,
  `waiver_marks_td` varchar(100) DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL,
  `inserted_date` varchar(100) DEFAULT NULL,
  `inserted_time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bqr_status`
--
ALTER TABLE `bqr_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_add`
--
ALTER TABLE `product_add`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `remarks_bqr_status`
--
ALTER TABLE `remarks_bqr_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remarks_uqr_status`
--
ALTER TABLE `remarks_uqr_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uqr_status`
--
ALTER TABLE `uqr_status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bqr_status`
--
ALTER TABLE `bqr_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_add`
--
ALTER TABLE `product_add`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `remarks_bqr_status`
--
ALTER TABLE `remarks_bqr_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `remarks_uqr_status`
--
ALTER TABLE `remarks_uqr_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uqr_status`
--
ALTER TABLE `uqr_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
